<?php

namespace Unit\Models\PaymentLink\CustomDomain;

use Faker\Factory as Faker;
use RZP\Exception\IntegrationException;
use RZP\Tests\Unit\Models\PaymentLink\BaseTest;
use Rzp\CustomDomainService\App\V1;
use RZP\Models\PaymentLink\CustomDomain\AppClient;

class AppClientTest extends BaseTest
{
    use BaseCDSClientTrait;

    /**
     * @var \Faker\Generator
     */
    private $faker;

    /**
     * {@inheritDoc}
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->faker = Faker::create();

        $this->api = \Mockery::mock(V1\AppAPI::class);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_app_client
     * @return void
     */
    public function testCreateApp()
    {
        $data = [
            AppClient::CALLBACK_URL_KEY => $this->faker->url, // UniqueIdEntity::generateUniqueId()
            AppClient::APP_NAME_KEY     => $this->faker->userName,
        ];

        $this->mockApi("Create", $data);

        $res = $this->client->createApp($data);

        $this->assertNotNull(array_get($res, AppClient::ID_KEY));
        $this->assertEquals($data[AppClient::CALLBACK_URL_KEY], $res[AppClient::CALLBACK_URL_KEY]);
        $this->assertEquals($data[AppClient::APP_NAME_KEY], $res[AppClient::APP_NAME_KEY]);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_app_client
     * @return void
     */
    public function testCreateAppFailure()
    {
        $data = [
            AppClient::CALLBACK_URL_KEY => $this->faker->url, // UniqueIdEntity::generateUniqueId()
            AppClient::APP_NAME_KEY     => $this->faker->userName,
        ];

        $this->mockApi("Create", $data, new V1\TwirpError("internal_error", "error"));

        $this->expectException(IntegrationException::class);
        $this->expectExceptionMessage("Could not receive proper response from custom domain service");

        $this->client->createApp($data);
    }

    protected function getResponse($method, $data = [])
    {
        $defaultData = [
            AppClient::ID_KEY           => $this->faker->text(14), // UniqueIdEntity::generateUniqueId()
            AppClient::APP_NAME_KEY     => $this->faker->userName,
            AppClient::CALLBACK_URL_KEY => $this->faker->url,
        ];

        $res = [
            "Create" => new V1\AppResponse(array_merge($defaultData, $data))
        ];

        return $res[$method];
    }

    protected function setClient()
    {
        $this->client = new AppClient;

        $this->client->setApi($this->api);
    }
}
