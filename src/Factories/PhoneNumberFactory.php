<?php

namespace RentManager\Factories;
use RentManager\Models\PhoneNumber as RentManagerPhoneNumber;
use RentManager\Models\Contact as RentManagerContact;

use Entities\Leases\Lease as LeaseEntity;
use Entities\Leases\Tenant as TenantEntity;

/**
 * Factory for creating a rent manager tenant models.
 *
 * @version 1.0
 * @author Jeff
 */
class PhoneNumberFactory
{
    const TYPE_ID_HOME = 1;
    const TYPE_ID_WORK = 2;
    const TYPE_ID_CELL = 3;
    const TYPE_ID_PAGER = 4;

    /**
     * Create a contact model from a tenant entity.
     * @param RentManagerContact $contactModel
     * @param LeaseEntity $leaseEntity
     * @return RentManagerPhoneNumber
     */
    public static function createPhoneNumber($contactModel, $leaseEntity) {

        $model = new RentManagerPhoneNumber();
        $model->setIsPrimary(true);
        $model->setPhoneNumberTypeID(self::TYPE_ID_CELL);

        foreach($leaseEntity->getTenants() as $tenant) {

            if($tenant->getEmail() == $contactModel->getEmail()) {

                //  Match email to tenant, create phone model from tenant phone number.
                $model->setPhoneNumber($tenant->getPhoneNumber());

            } else if($tenant->getCosignorEmail() == $contactModel->getEmail()) {

                //  Match email to cosignor, create phone model from tenant phone number.
                $model->setPhoneNumber($tenant->getCosignorPhone());

            }
        }

        return $model;
    }
}