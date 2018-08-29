<?php


namespace RentManager\Resources;
use RentManager\Resources\Base\TenantResourceQuery as BaseTenantResourceQuery;
use RentManager\Models\Tenant;
use RentManager\RentManager;


/**
 * Rent Manager Tenant resource.
 */
class TenantResourceQuery extends BaseTenantResourceQuery
{
    /**
     * Retrieve a tenant instance by lease id.
     * @param mixed $leaseId
     * @throws \ErrorException
     * @return Tenant|bool
     */
    public function retrieveTenantByLeaseId($leaseId) {
        $result = $this->addFilter("UserDefinedValues.Name", "LEASE ID", "=")
            ->addFilter("UserDefinedValues.Value", $leaseId, "=")
            ->retrieveCollection();

        if(count($result) == 1)
            return $result[0];
        else if(count($result) > 1) {
            throw new \ErrorException("More than 1 tenant found in Rent Manager for lease #{$leaseId}.");
        } else if(count($result) == 0 || $result == null) {
            return false;
        } else {
            throw new \ErrorException("Unknown error retrieving account from Rent Manager for lease #{$leaseId}.");
        }
    }

    /**
     * Retrieve tenant instances by lease ids.
     * @param int[] $leaseId
     * @return Tenant[]
     */
    public function retrieveTenantsByLeaseIds($leaseIds) {
        $results = $this->addFilter("UserDefinedValues.Name", "LEASE ID", "=")
            ->addFilter("UserDefinedValues.Value", $leaseIds, "In")
            ->retrieveCollection();

        return $results;
    }

    /**
     * Retrieve the balance for a tenant.
     * @return mixed
     */
    public function retrieveBalance() {

        $this->addEmbed("Balance");
        $this->addFields(["Balance"]);

        $res = RentManager::getApiRequestor()->request("GET", $this->_resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);
        return $data["Balance"];

    }
}