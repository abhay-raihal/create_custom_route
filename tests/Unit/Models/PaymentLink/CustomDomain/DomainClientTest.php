<?php

namespace Unit\Models\PaymentLink\CustomDomain;

use Faker\Factory as Faker;
use RZP\Exception\IntegrationException;
use RZP\Tests\Unit\Models\PaymentLink\BaseTest;
use Rzp\CustomDomainService\Domain\V1;
use RZP\Models\PaymentLink\CustomDomain\Status;
use RZP\Models\PaymentLink\CustomDomain\DomainClient;

class DomainClientTest extends BaseTest
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

        $this->api = \Mockery::mock(V1\DomainAPI::class);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testCreateDomain()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("Create", $data);

        $res = $this->client->createDomain($data);

        $this->assertNotNull(array_get($res, DomainClient::ID_KEY));
        $this->assertNotNull(array_get($res, DomainClient::STATUS_KEY));
        $this->assertEquals($data[DomainClient::DOMAIN_NAME_KEY], $res[DomainClient::DOMAIN_NAME_KEY]);
        $this->assertEquals($data[DomainClient::MERCHANT_ID_KEY], $res[DomainClient::MERCHANT_ID_KEY]);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testCreateDomainError()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("Create", $data, new V1\TwirpError("internal_error", "error"));

        $this->expectException(IntegrationException::class);
        $this->expectExceptionMessage("Could not receive proper response from custom domain service");

        $this->client->createDomain($data);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testListDomain()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("List", $data);

        $res = $this->client->listDomain($data);

        $this->assertNotNull(array_get($res[DomainClient::ITEMS_KEY][0], DomainClient::ID_KEY));
        $this->assertNotNull(array_get($res[DomainClient::ITEMS_KEY][0], DomainClient::STATUS_KEY));
        $this->assertEquals(1, $res[DomainClient::COUNT_KEY]);
        $this->assertEquals("domain", $res[DomainClient::ENTITY_KEY]);
        $this->assertEquals($data[DomainClient::DOMAIN_NAME_KEY], $res[DomainClient::ITEMS_KEY][0][DomainClient::DOMAIN_NAME_KEY]);
        $this->assertEquals($data[DomainClient::DOMAIN_NAME_KEY], $res[DomainClient::ITEMS_KEY][0][DomainClient::DOMAIN_NAME_KEY]);
        $this->assertEquals($data[DomainClient::MERCHANT_ID_KEY], $res[DomainClient::ITEMS_KEY][0][DomainClient::MERCHANT_ID_KEY]);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testListDomainErrpr()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("List", $data, new V1\TwirpError("internal_error", "error"));

        $this->expectException(IntegrationException::class);
        $this->expectExceptionMessage("Could not receive proper response from custom domain service");

        $this->client->listDomain($data);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testDeleteDomain()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("Delete", $data);

        $res = $this->client->deleteDomain($data);

        $this->assertNotNull(array_get($res, DomainClient::ID_KEY));
        $this->assertNotNull(array_get($res, DomainClient::STATUS_KEY));
        $this->assertEquals($data[DomainClient::DOMAIN_NAME_KEY], $res[DomainClient::DOMAIN_NAME_KEY]);
        $this->assertEquals($data[DomainClient::MERCHANT_ID_KEY], $res[DomainClient::MERCHANT_ID_KEY]);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testDeleteDomainErrpr()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("Delete", $data, new V1\TwirpError("internal_error", "error"));

        $this->expectException(IntegrationException::class);
        $this->expectExceptionMessage("Could not receive proper response from custom domain service");

        $this->client->deleteDomain($data);
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testIsSubDomain()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("IsSubDomain", $data);

        $res = $this->client->isSubDomain($data);

        $this->assertNotNull(array_get($res, DomainClient::IS_SUB_DOMAIN_KEY));
    }

    /**
     * @group nocode_cds
     * @group nocode_cds_domain_client
     * @return void
     */
    public function testIsSubDomainErrpr()
    {
        $data = [
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->domainName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
        ];

        $this->mockApi("isSubDomain", $data, new V1\TwirpError("internal_error", "error"));

        $this->expectException(IntegrationException::class);
        $this->expectExceptionMessage("Could not receive proper response from custom domain service");

        $this->client->isSubDomain($data);
    }

    protected function getResponse($method, $data = [])
    {
        $defaultData = [
            DomainClient::ID_KEY            => $this->faker->text(14), // UniqueIdEntity::generateUniqueId()
            DomainClient::DOMAIN_NAME_KEY   => $this->faker->userName,
            DomainClient::MERCHANT_ID_KEY   => $this->faker->text(14),
            DomainClient::STATUS_KEY        => $this->faker->randomElement(Status::$statuses),
            DomainClient::CREATED_AT_KEY    => millitime(),
            DomainClient::UPDATED_AT_KEY   => millitime(),
        ];

        $res = [
            "Create" => new V1\DomainResponse(array_merge($defaultData, $data)),
            "List" => new V1\ListDomainResponse([
                DomainClient::COUNT_KEY     => 1,
                DomainClient::ENTITY_KEY    => "domain",
                DomainClient::ITEMS_KEY     => [
                    new V1\DomainResponse(array_merge($defaultData, $data))
                ]
            ]),
            "Delete" => new V1\DomainResponse(array_merge($defaultData, $data)),
            "IsSubDomain" => new V1\IsSubDomainResponse(["is_sub_domain" => true]),
        ];

        return $res[$method];
    }

    protected function setClient()
    {
        $this->client = new DomainClient;

        $this->client->setApi($this->api);
    }
}
