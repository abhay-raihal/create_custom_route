<?php

namespace RZP\Tests\Functional\Consumer;

use GuzzleHttp\Psr7\Response;
use Razorpay\Outbox\Job\Core as Outbox;
use Rzp\Credcase\Consumer\V1\Consumer;
use RZP\Models\Key\Entity as Key;
use RZP\Models\Key\OutboxHandler;
use RZP\Tests\Functional\TestCase;
use RZP\Tests\Functional\RequestResponseFlowTrait;

class ConsumerTest extends TestCase
{
    use RequestResponseFlowTrait;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->ba->adminAuth();
    }

    protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
        \Mockery::close();
    }

    public function testMigrateInternalApplications()
    {
        $outbox = \Mockery::mock(Outbox::class);
        $this->app->instance('outbox', $outbox);
        // Setup Outbox mock & expectations if dual write is enabled.
        $dualWriteEnabled = app('config')->get('services.credcase')['dual_write_enabled'];
        if ($dualWriteEnabled) {

            $expectedPayload = array(
                Key::ID          => 'D6YYOMAUVg8TuB',
                Key::SECRET      => 'password',
                'mode'           => 2,
                Key::MERCHANT_ID => null,
                Key::OWNER_ID    => 'app_id',
                Key::OWNER_TYPE  => 'application',
                Key::DOMAIN      => Key::DOMAIN_RAZORPAY,
                Key::ROLE_NAMES  => ['app::test_app']
            );
            $outbox->shouldReceive('send')
                ->withArgs(function ($name, $payload) use ($expectedPayload) {
                    // Not comparing created_at since it may result in flaky tests.
                    unset($payload[Key::CREATED_AT]);

                    return $name === OutboxHandler::MIGRATE and $payload === $expectedPayload;
                })
                ->once()
                ->andReturn();
        }

        // Setup mock http client for Credcase.
        $mockResponse = new Response(200);
        $httpClient   = app('credcase_http_client');
        // Fail the first request.
        $httpClient->addResponse(new Response(500));
        $httpClient->addResponse($mockResponse);

        $res = $this->sendRequest([
            'url'     => '/admin/consumers/migrate_apps_to_credcase',
            'method'  => 'POST',
            'content' => [
                'app_id'     => 'app_id',
                'app_config' => [
                    'name'        => 'test_app',
                    'credentials' => [
                        [
                            'username' => 'rzp_live_D6YYOMAUVg8TuB',
                            'password' => 'password',
                            'mode'     => 'live',
                            'roles'    => ['app::test_app']
                        ]
                    ]
                ]
            ]
        ]);

        // Assert ConsumerCreate request to Credcase. We'll expect 2 requests because the first one will fail.
        $this->assertCount(2, $httpClient->getRequests());
        $req      = $httpClient->getRequests()[1];
        $consumer = new Consumer;
        $consumer->mergeFromString((string)$req->getBody());
        $this->assertSame("app_id", $consumer->getOwnerId());
        $this->assertSame("application", $consumer->getOwnerType());
        $this->assertSame("test_app", $consumer->getMeta()["name"]);
        $this->assertSame("razorpay", $consumer->getDomain());

        // Verify that Authorization header is set correctly.
        $config = app('config')->get('services.credcase');
        $auth   = 'Basic ' . base64_encode($config['user'] . ':' . $config['password']);
        $this->assertSame($auth, $req->getHeaders()["Authorization"][0]);

        $res->assertOk();
        $res->assertExactJson([
            [
                "app"      => "test_app",
                "migrated" => 1,
                "skipped"  => 0,
            ]
        ]);
    }
}