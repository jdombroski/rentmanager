<?php

namespace RentManager\Factories;
use RentManager\Models\Contact as RentManagerContact;

use Entities\Leases\Lease as LeaseEntity;
use Entities\Leases\Tenant as TenantEntity;

/**
 * Factory for creating a rent manager tenant models.
 *
 * @version 1.0
 * @author Jeff
 */
class ContactFactory
{
    const TYPE_ID_TENANT = 2;
    const TYPE_ID_COSIGNOR = 1;
    const TYPE_ID_PARENT = 3;

    /**
     * Create a contact model from a tenant entity.
     * @param TenantEntity $tenant
     * @return RentManagerContact
     */
    public static function createPrimaryContact(TenantEntity $tenant) {
        return self::createContact($tenant->getFirstName(), $tenant->getLastName(), $tenant->getEmail(), self::TYPE_ID_TENANT);
    }

    /**
     * Create the non-primary contacts for a lease.
     * @param LeaseEntity $lease
     * @return RentManagerContact[]
     */
    public static function createNonPrimaryContacts(LeaseEntity $lease) {

        $contacts = [];

        foreach($lease->getTenants() as $i => $tenant) {

            //  Skip potential tenants.
            if($tenant->isPotentialTenant())
                continue;

            if($tenant->isParent()) {
                $contacts[] = self::createContact($tenant->getFirstName(), $tenant->getLastName(), $tenant->getEmail(), self::TYPE_ID_PARENT);

            } else {

                //  The first tenant is the primary contact.
                if($i != 0) {
                    $contacts[] = self::createContact($tenant->getFirstName(), $tenant->getLastName(), $tenant->getEmail(), self::TYPE_ID_TENANT);
                }

                //  Only create cosignor contact if info exists.
                if($tenant->getCosignorFullName() && $tenant->getCosignorEmail() && $tenant->getCosignorPhone())
                    $contacts[] = self::createContact($tenant->getCosignorFirstName(), $tenant->getCosignorLastName(), $tenant->getCosignorEmail(), self::TYPE_ID_COSIGNOR);

            }

        }

        return $contacts;

    }

    /**
     * Create a rent manager contact model.
     * @param mixed $firstName
     * @param mixed $lastName
     * @param mixed $email
     * @param mixed $typeId
     * @return RentManagerContact
     */
    private static function createContact($firstName, $lastName, $email, $typeId) {
        $contact = new RentManagerContact();
        $contact->setLastName($lastName);
        $contact->setFirstName($firstName);
        $contact->setEmail($email);
        $contact->setContactTypeID($typeId);
        return $contact;
    }
}