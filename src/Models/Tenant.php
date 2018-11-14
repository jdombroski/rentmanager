<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Tenant model.
 */
class Tenant extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "TenantID" => "integer",
        "TenantDisplayID" => "integer",
        "Name" => "string",
        "FirstName" => "string",
        "LastName" => "string",
        "WebMessage" => "string",
        "IsCompany" => "bool",
        "ColorID" => "integer",
        "PropertyID" => "integer",
        "Comment" => "string",
        "RentDueDay" => "integer",
        "RentPeriod" => "string",
        "DoNotChargeLateFees" => "bool",
        "DoNotPrintStatements" => "bool",
        "DoNotAcceptChecks" => "bool",
        "DoNotAcceptPayments" => "bool",
        "IsProspect" => "bool",
        "Property" => "Property",
        "Leases" => "Lease[]",
        "WebUserAccounts" => "WebUserAccount[]",
        "PrimaryContact" => "Contact",
        "UserDefinedValues" => "UserDefinedValue[]",
        "Balance" => "double",
        "Charges" => "Charge[]",
        "RecurringCharges" => "RecurringCharge[]",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['TenantID']) ? $this->container['TenantID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [TenantID] field.
	 * @return  integer
	 */
	public function getTenantID() {
        return isset($this->container['TenantID']) ? $this->container['TenantID'] : null;
	}

	/**
	 * Set the [TenantID] field.
     * @param    integer $tenantID
     * @return  Tenant
	 */
	public function setTenantID($tenantID) {
        $this->container['TenantID'] = $tenantID;
        return $this;
	}

    
    /**
	 * Get the [TenantDisplayID] field.
	 * @return  integer
	 */
	public function getTenantDisplayID() {
        return isset($this->container['TenantDisplayID']) ? $this->container['TenantDisplayID'] : null;
	}

	/**
	 * Set the [TenantDisplayID] field.
     * @param    integer $tenantDisplayID
     * @return  Tenant
	 */
	public function setTenantDisplayID($tenantDisplayID) {
        $this->container['TenantDisplayID'] = $tenantDisplayID;
        return $this;
	}

    
    /**
	 * Get the [Name] field.
	 * @return  string
	 */
	public function getName() {
        return isset($this->container['Name']) ? $this->container['Name'] : null;
	}

	/**
	 * Set the [Name] field.
     * @param    string $name
     * @return  Tenant
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [FirstName] field.
	 * @return  string
	 */
	public function getFirstName() {
        return isset($this->container['FirstName']) ? $this->container['FirstName'] : null;
	}

	/**
	 * Set the [FirstName] field.
     * @param    string $firstName
     * @return  Tenant
	 */
	public function setFirstName($firstName) {
        $this->container['FirstName'] = $firstName;
        return $this;
	}

    
    /**
	 * Get the [LastName] field.
	 * @return  string
	 */
	public function getLastName() {
        return isset($this->container['LastName']) ? $this->container['LastName'] : null;
	}

	/**
	 * Set the [LastName] field.
     * @param    string $lastName
     * @return  Tenant
	 */
	public function setLastName($lastName) {
        $this->container['LastName'] = $lastName;
        return $this;
	}

    
    /**
	 * Get the [WebMessage] field.
	 * @return  string
	 */
	public function getWebMessage() {
        return isset($this->container['WebMessage']) ? $this->container['WebMessage'] : null;
	}

	/**
	 * Set the [WebMessage] field.
     * @param    string $webMessage
     * @return  Tenant
	 */
	public function setWebMessage($webMessage) {
        $this->container['WebMessage'] = $webMessage;
        return $this;
	}

    
    /**
	 * Get the [IsCompany] field.
	 * @return  bool
	 */
	public function getIsCompany() {
        return isset($this->container['IsCompany']) ? $this->container['IsCompany'] : null;
	}

	/**
	 * Set the [IsCompany] field.
     * @param    bool $isCompany
     * @return  Tenant
	 */
	public function setIsCompany($isCompany) {
        $this->container['IsCompany'] = $isCompany;
        return $this;
	}

    
    /**
	 * Get the [ColorID] field.
	 * @return  integer
	 */
	public function getColorID() {
        return isset($this->container['ColorID']) ? $this->container['ColorID'] : null;
	}

	/**
	 * Set the [ColorID] field.
     * @param    integer $colorID
     * @return  Tenant
	 */
	public function setColorID($colorID) {
        $this->container['ColorID'] = $colorID;
        return $this;
	}

    
    /**
	 * Get the [PropertyID] field.
	 * @return  integer
	 */
	public function getPropertyID() {
        return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
     * @param    integer $propertyID
     * @return  Tenant
	 */
	public function setPropertyID($propertyID) {
        $this->container['PropertyID'] = $propertyID;
        return $this;
	}

    
    /**
	 * Get the [Comment] field.
	 * @return  string
	 */
	public function getComment() {
        return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
     * @param    string $comment
     * @return  Tenant
	 */
	public function setComment($comment) {
        $this->container['Comment'] = $comment;
        return $this;
	}

    
    /**
	 * Get the [RentDueDay] field.
	 * @return  integer
	 */
	public function getRentDueDay() {
        return isset($this->container['RentDueDay']) ? $this->container['RentDueDay'] : null;
	}

	/**
	 * Set the [RentDueDay] field.
     * @param    integer $rentDueDay
     * @return  Tenant
	 */
	public function setRentDueDay($rentDueDay) {
        $this->container['RentDueDay'] = $rentDueDay;
        return $this;
	}

    
    /**
	 * Get the [RentPeriod] field.
	 * @return  string
	 */
	public function getRentPeriod() {
        return isset($this->container['RentPeriod']) ? $this->container['RentPeriod'] : null;
	}

	/**
	 * Set the [RentPeriod] field.
     * @param    string $rentPeriod
     * @return  Tenant
	 */
	public function setRentPeriod($rentPeriod) {
        $this->container['RentPeriod'] = $rentPeriod;
        return $this;
	}

    
    /**
	 * Get the [DoNotChargeLateFees] field.
	 * @return  bool
	 */
	public function getDoNotChargeLateFees() {
        return isset($this->container['DoNotChargeLateFees']) ? $this->container['DoNotChargeLateFees'] : null;
	}

	/**
	 * Set the [DoNotChargeLateFees] field.
     * @param    bool $doNotChargeLateFees
     * @return  Tenant
	 */
	public function setDoNotChargeLateFees($doNotChargeLateFees) {
        $this->container['DoNotChargeLateFees'] = $doNotChargeLateFees;
        return $this;
	}

    
    /**
	 * Get the [DoNotPrintStatements] field.
	 * @return  bool
	 */
	public function getDoNotPrintStatements() {
        return isset($this->container['DoNotPrintStatements']) ? $this->container['DoNotPrintStatements'] : null;
	}

	/**
	 * Set the [DoNotPrintStatements] field.
     * @param    bool $doNotPrintStatements
     * @return  Tenant
	 */
	public function setDoNotPrintStatements($doNotPrintStatements) {
        $this->container['DoNotPrintStatements'] = $doNotPrintStatements;
        return $this;
	}

    
    /**
	 * Get the [DoNotAcceptChecks] field.
	 * @return  bool
	 */
	public function getDoNotAcceptChecks() {
        return isset($this->container['DoNotAcceptChecks']) ? $this->container['DoNotAcceptChecks'] : null;
	}

	/**
	 * Set the [DoNotAcceptChecks] field.
     * @param    bool $doNotAcceptChecks
     * @return  Tenant
	 */
	public function setDoNotAcceptChecks($doNotAcceptChecks) {
        $this->container['DoNotAcceptChecks'] = $doNotAcceptChecks;
        return $this;
	}

    
    /**
	 * Get the [DoNotAcceptPayments] field.
	 * @return  bool
	 */
	public function getDoNotAcceptPayments() {
        return isset($this->container['DoNotAcceptPayments']) ? $this->container['DoNotAcceptPayments'] : null;
	}

	/**
	 * Set the [DoNotAcceptPayments] field.
     * @param    bool $doNotAcceptPayments
     * @return  Tenant
	 */
	public function setDoNotAcceptPayments($doNotAcceptPayments) {
        $this->container['DoNotAcceptPayments'] = $doNotAcceptPayments;
        return $this;
	}

    
    /**
	 * Get the [IsProspect] field.
	 * @return  bool
	 */
	public function getIsProspect() {
        return isset($this->container['IsProspect']) ? $this->container['IsProspect'] : null;
	}

	/**
	 * Set the [IsProspect] field.
     * @param    bool $isProspect
     * @return  Tenant
	 */
	public function setIsProspect($isProspect) {
        $this->container['IsProspect'] = $isProspect;
        return $this;
	}

    
    /**
	 * Get the [Property] field.
	 * @return  Property
	 */
	public function getProperty() {
        return isset($this->container['Property']) ? $this->container['Property'] : null;
	}

	/**
	 * Set the [Property] field.
     * @param    Property $property
     * @return  Tenant
	 */
	public function setProperty($property) {
        $this->container['Property'] = $property;
        return $this;
	}

    
    /**
	 * Get the [Leases] field.
	 * @return  Lease[]
	 */
	public function getLeases() {
        return isset($this->container['Leases']) ? $this->container['Leases'] : null;
	}

	/**
	 * Set the [Leases] field.
     * @param    Lease[] $leases
     * @return  Tenant
	 */
	public function setLeases($leases) {
        $this->container['Leases'] = $leases;
        return $this;
	}

    
    /**
	 * Get the [WebUserAccounts] field.
	 * @return  WebUserAccount[]
	 */
	public function getWebUserAccounts() {
        return isset($this->container['WebUserAccounts']) ? $this->container['WebUserAccounts'] : null;
	}

	/**
	 * Set the [WebUserAccounts] field.
     * @param    WebUserAccount[] $webUserAccounts
     * @return  Tenant
	 */
	public function setWebUserAccounts($webUserAccounts) {
        $this->container['WebUserAccounts'] = $webUserAccounts;
        return $this;
	}

    
    /**
	 * Get the [PrimaryContact] field.
	 * @return  Contact
	 */
	public function getPrimaryContact() {
        return isset($this->container['PrimaryContact']) ? $this->container['PrimaryContact'] : null;
	}

	/**
	 * Set the [PrimaryContact] field.
     * @param    Contact $primaryContact
     * @return  Tenant
	 */
	public function setPrimaryContact($primaryContact) {
        $this->container['PrimaryContact'] = $primaryContact;
        return $this;
	}

    
    /**
	 * Get the [UserDefinedValues] field.
	 * @return  UserDefinedValue[]
	 */
	public function getUserDefinedValues() {
        return isset($this->container['UserDefinedValues']) ? $this->container['UserDefinedValues'] : null;
	}

	/**
	 * Set the [UserDefinedValues] field.
     * @param    UserDefinedValue[] $userDefinedValues
     * @return  Tenant
	 */
	public function setUserDefinedValues($userDefinedValues) {
        $this->container['UserDefinedValues'] = $userDefinedValues;
        return $this;
	}

    
    /**
	 * Get the [Balance] field.
	 * @return  double
	 */
	public function getBalance() {
        return isset($this->container['Balance']) ? $this->container['Balance'] : null;
	}

	/**
	 * Set the [Balance] field.
     * @param    double $balance
     * @return  Tenant
	 */
	public function setBalance($balance) {
        $this->container['Balance'] = $balance;
        return $this;
	}

    
    /**
	 * Get the [Charges] field.
	 * @return  Charge[]
	 */
	public function getCharges() {
        return isset($this->container['Charges']) ? $this->container['Charges'] : null;
	}

	/**
	 * Set the [Charges] field.
     * @param    Charge[] $charges
     * @return  Tenant
	 */
	public function setCharges($charges) {
        $this->container['Charges'] = $charges;
        return $this;
	}

    
    /**
	 * Get the [RecurringCharges] field.
	 * @return  RecurringCharge[]
	 */
	public function getRecurringCharges() {
        return isset($this->container['RecurringCharges']) ? $this->container['RecurringCharges'] : null;
	}

	/**
	 * Set the [RecurringCharges] field.
     * @param    RecurringCharge[] $recurringCharges
     * @return  Tenant
	 */
	public function setRecurringCharges($recurringCharges) {
        $this->container['RecurringCharges'] = $recurringCharges;
        return $this;
	}

    
    #endregion
}