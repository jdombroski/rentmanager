<?php

namespace RentManager\Resources;
use RentManager\Resources\Base\UserDefinedFieldResourceQuery as BaseUserDefinedFieldResourceQuery;


/**
 * Rent Manager UserDefinedField resource.
 */
class UserDefinedFieldResourceQuery extends BaseUserDefinedFieldResourceQuery
{
    /**
     * Retrieve the lease id user defined value.
     * @return \RentManager\Models\UserDefinedValue
     */
    public function retrieveLeaseId() {
        return $this->filterByName("LEASE ID")->retrieveCollection()[0];
    }

    /**
     * Retrieve the resident id user defined value.
     * @return \RentManager\Models\UserDefinedValue
     */
    public function retrieveResidentId() {
        return $this->filterByName("RESIDENT ID")->retrieveCollection()[0];
    }
}