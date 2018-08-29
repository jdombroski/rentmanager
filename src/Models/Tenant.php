<?php

namespace RentManager\Models;
use RentManager\Models\Base\Tenant as BaseTenant;

/**
 * Tenant skeleton class.
 */
class Tenant extends BaseTenant
{
    private $trimarkLeaseId;

    /**
     * Get the lease id of the tenant's associated Trimark lease.
     * This id should be stored as a user defined value with the name 'LEASE ID'. Note this value can
     * only be found if the userDefinedValues for the tenant are embedded in the request response.
     * @return int
     */
    public function getTrimarkLeaseId() {

        if(!isset($this->trimarkLeaseId)) {

            $this->trimarkLeaseId = null;

            foreach($this->getUserDefinedValues() as $userDefinedValue) {
                if($userDefinedValue->getName() == "LEASE ID") {
                    $this->trimarkLeaseId = (int) $userDefinedValue->getValue();
                }
            }

        }

        return $this->trimarkLeaseId;
    }
}