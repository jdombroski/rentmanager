<?php

namespace RentManager\Factories;
use RentManager\Models\Tenant as RentManagerTenant;
use RentManager\Models\Lease as RentManagerLease;
use RentManager\Models\LeaseRenewal as RentManagerLeaseRenewal;

use Entities\Leases\Lease as LeaseEntity;

/**
 * Factory for creating a rent manager lease models.
 *
 * @version 1.0
 * @author Jeff
 */
class LeaseFactory
{
    /**
     * Create a rent manager lease model from a lease entity.
     * @param LeaseEntity $leaseEntity
     * @param int $rentManagerTenantId
     * @return RentManagerLease
     */
    public static function createLease(LeaseEntity $leaseEntity, $rentManagerTenantId) {

        $startDate = clone $leaseEntity->getDateLeaseStarts();

        //  Renewal leases should have a modified start
        //  date to +1 day to avoid conflicting with the
        //  moveout of the previous lease.
        if($leaseEntity->isRenewalLease()) {
            $startDate->modify("+1 day");
        }

        $lease = new RentManagerLease();
        $lease->setTenantID($rentManagerTenantId);
        $lease->setPropertyID($leaseEntity->getPropertyInfo()->getRentManagerId());
        $lease->setMoveInDate($startDate);
        $lease->setMoveOutDate($leaseEntity->getDateLeaseEnds());

        //  Set the unit ID if it has been assigned already.
        if($leaseEntity->getUnitInfo()) {
            $lease->setUnitID((int)$leaseEntity->getUnitInfo()->getRentManagerId());
        }

        $activeLeaseRenewal = new RentManagerLeaseRenewal();
        $activeLeaseRenewal->setStartDate($startDate);
        $activeLeaseRenewal->setEndDate($leaseEntity->getDateLeaseEnds());
        $activeLeaseRenewal->setSignDate($leaseEntity->getPrimaryTenant()->getDateSigned());
        $lease->setActiveLeaseRenewal($activeLeaseRenewal);

        return $lease;
    }

}