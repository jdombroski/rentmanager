<?php

namespace RentManager\Factories;
use RentManager\Models\UserDefinedValue as RentManagerUserDefinedValue;
use RentManager\Models\Contact as RentManagerContact;

use Entities\Leases\Lease as LeaseEntity;
use Entities\Leases\Tenant as TenantEntity;

/**
 * Factory for creating a rent manager tenant models.
 *
 * @version 1.0
 * @author Jeff
 */
class UserDefinedValueFactory
{
    const LEASE_FIELD_ID = 18;
    const RESIDENT_FIELD_ID = 19;

    /**
     * Create a new lease id user defined value.
     * @param int $leaseId
     * @return RentManagerUserDefinedValue
     */
    public static function createLeaseId($leaseId) {
        $userDefinedValue = new RentManagerUserDefinedValue();
        $userDefinedValue->setUserDefinedFieldID(self::LEASE_FIELD_ID);
        $userDefinedValue->setValue($leaseId);

        return $userDefinedValue;
    }

    /**
     * Create a new resident id user defined value.
     * @param RentManagerContact $contactModel
     * @param LeaseEntity $leaseEntity
     * @return RentManagerUserDefinedValue
     */
    public static function createResidentId($contactModel, $leaseEntity) {
        $userDefinedValue = new RentManagerUserDefinedValue();
        $userDefinedValue->setUserDefinedFieldID(self::RESIDENT_FIELD_ID);

        foreach($leaseEntity->getTenants() as $tenant) {

            if($tenant->getEmail() == $contactModel->getEmail()) {

                //  Match email to tenant, use tenant id.
                $userDefinedValue->setValue($tenant->getId());

            } else if($tenant->getCosignorEmail() == $contactModel->getEmail()) {

                //  Match email to cosignor, use tenant id.
                $userDefinedValue->setValue($tenant->getId());

            }
        }

        return $userDefinedValue;
    }
}