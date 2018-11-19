<?php

use PHPUnit\Framework\TestCase;
use RentManager\Resources\TenantResourceQuery;
use RentManager\Runtime\Client;

final class ApiTest extends TestCase
{
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
    }

    public function testTenantFindOne()
    {

        $tenant = TenantResourceQuery::create("Tenants")
            ->filterBy("UserDefinedValues.Name", "LEASE ID")         //  Filter by lease id field
            ->filterBy("UserDefinedValues.Value", "5195")    //  Filter by lease id value
            ->findOne();

        var_dump($tenant);
        die();
    }
}