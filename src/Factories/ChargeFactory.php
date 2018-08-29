<?php

namespace RentManager\Factories;
use RentManager\Models\Charge as RentManagerCharge;

use Entities\Leases\Lease as LeaseEntity;
use Entities\Leases\Tenant as TenantEntity;

/**
 * Factory for creating Rent Manager charges.
 *
 * @version 1.0
 * @author Jeff
 */
class ChargeFactory
{
    const CHARGE_TYPE_ID_DEPOSITS = 4;
    const CHARGE_TYPE_ID_RENT = 2;
    const CHARGE_TYPE_ID_APP_FEE = 20;
    const CHARGE_TYPE_ID_REDEC_FEE = 44;

    /**
     * Create models for initial charges on a lease.
     * @param LeaseEntity $lease
     * @return RentManagerCharge[]
     */
    public static function createInitialLeaseCharges(LeaseEntity $lease) {

        $models = [];

        $appFee = new RentManagerCharge();
        $appFee->setAmount((double)$lease->getApplicationFee());
        $appFee->setChargeTypeID(self::CHARGE_TYPE_ID_APP_FEE);
        $appFee->setComment("Initial app fee from leasing system");
        $appFee->setPropertyID($lease->getPropertyInfo()->getRentManagerId());
        $appFee->setTransactionDate($lease->getDateCreated());
        $models[] = $appFee;

        $redecFee = new RentManagerCharge();
        $redecFee->setAmount((double)$lease->getRedecorationFee());
        $redecFee->setChargeTypeID(self::CHARGE_TYPE_ID_REDEC_FEE);
        $redecFee->setComment("Initial redec fee from leasing system");
        $redecFee->setPropertyID($lease->getPropertyInfo()->getRentManagerId());
        $redecFee->setTransactionDate($lease->getDateCreated());
        $models[] = $redecFee;

        return $models;
    }

}