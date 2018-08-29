<?php

namespace RentManager\Factories;
use RentManager\Models\Prospect as RentManagerProspect;
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
class ProspectFactory
{
    /**
     * Create a rent manager prospect model from a lease entity.
     * @param LeaseEntity $lease
     * @return RentManagerProspect
     */
    public static function createProspect(LeaseEntity $lease) {

        $primaryTenantEntity = $lease->getPrimaryTenant();

        $prospect = new RentManagerProspect();
        $prospect->setFirstName($primaryTenantEntity->getFirstName());
        $prospect->setLastName($primaryTenantEntity->getLastName());
        $prospect->setPropertyID($lease->getPropertyInfo()->getRentManagerId());

        $startDate = clone $lease->getDateLeaseStarts();

        //  Renewal leases should have a modified start
        //  date to +1 day to avoid conflicting with the
        //  moveout of the previous lease.
        if($lease->isRenewalLease()) {
            $startDate->modify("+1 day");
        }

        $prospect->setMoveInDate($startDate);
        $prospect->setMoveOutDate($lease->getDateLeaseEnds());

        $prospect->setPrimaryContact(ContactFactory::createPrimaryContact($primaryTenantEntity));

        return $prospect;
    }

}