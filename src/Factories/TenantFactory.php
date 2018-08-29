<?php

namespace RentManager\Factories;
use RentManager\Models\Tenant as RentManagerTenant;
use RentManager\Models\Contact as RentManagerContact;
use RentManager\Models\PhoneNumber as RentManagerPhoneNumber;
use RentManager\Models\UserDefinedValue as RentManagerUserDefinedValue;

use Entities\Leases\Lease as LeaseEntity;

/**
 * Factory for creating a rent manager tenant models.
 *
 * @version 1.0
 * @author Jeff
 */
class TenantFactory
{
    /**
     * Create a rent manager prospect model from a lease entity.
     * @param LeaseEntity $lease
     * @return RentManagerTenant
     */
    public static function createTenant(LeaseEntity $lease) {

        $primaryTenantEntity = $lease->getPrimaryTenant();

        $tenant = new RentManagerTenant();
        $tenant->setFirstName($primaryTenantEntity->getFirstName());
        $tenant->setLastName($primaryTenantEntity->getLastName());
        $tenant->setPropertyID($lease->getPropertyInfo()->getRentManagerId());
        $tenant->setRentPeriod("Monthly");
        $tenant->setRentDueDay(1);
        $tenant->setIsProspect(true);

        $tenant->setPrimaryContact(ContactFactory::createPrimaryContact($primaryTenantEntity));

        return $tenant;
    }

}