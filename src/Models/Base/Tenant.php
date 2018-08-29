<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Tenant base class.
 */
class Tenant extends BaseModel
{

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
                "Property" => "\RentManager\Models\Property",
                "Leases" => "\RentManager\Models\Lease[]",
                "WebUserAccounts" => "\RentManager\Models\WebUserAccount[]",
                "PrimaryContact" => "\RentManager\Models\Contact",
                "UserDefinedValues" => "\RentManager\Models\UserDefinedValue[]",
                "Balance" => "double",
                "Charges" => "\RentManager\Models\Charge[]",
                "RecurringCharges" => "\RentManager\Models\RecurringCharge[]",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['TenantID']) ? $this->container['TenantID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [TenantID] field.
	 * @return integer
	 */
	public function getTenantID() {
		return isset($this->container['TenantID']) ? $this->container['TenantID'] : null;
	}

	/**
	 * Set the [TenantID] field.
	 * @param integer $TenantID
	 */
	public function setTenantID($TenantID) {
		$this->container['TenantID'] = $TenantID;
	}

    
    /**
	 * Get the [TenantDisplayID] field.
	 * @return integer
	 */
	public function getTenantDisplayID() {
		return isset($this->container['TenantDisplayID']) ? $this->container['TenantDisplayID'] : null;
	}

	/**
	 * Set the [TenantDisplayID] field.
	 * @param integer $TenantDisplayID
	 */
	public function setTenantDisplayID($TenantDisplayID) {
		$this->container['TenantDisplayID'] = $TenantDisplayID;
	}

    
    /**
	 * Get the [Name] field.
	 * @return string
	 */
	public function getName() {
		return isset($this->container['Name']) ? $this->container['Name'] : null;
	}

	/**
	 * Set the [Name] field.
	 * @param string $Name
	 */
	public function setName($Name) {
		$this->container['Name'] = $Name;
	}

    
    /**
	 * Get the [FirstName] field.
	 * @return string
	 */
	public function getFirstName() {
		return isset($this->container['FirstName']) ? $this->container['FirstName'] : null;
	}

	/**
	 * Set the [FirstName] field.
	 * @param string $FirstName
	 */
	public function setFirstName($FirstName) {
		$this->container['FirstName'] = $FirstName;
	}

    
    /**
	 * Get the [LastName] field.
	 * @return string
	 */
	public function getLastName() {
		return isset($this->container['LastName']) ? $this->container['LastName'] : null;
	}

	/**
	 * Set the [LastName] field.
	 * @param string $LastName
	 */
	public function setLastName($LastName) {
		$this->container['LastName'] = $LastName;
	}

    
    /**
	 * Get the [WebMessage] field.
	 * @return string
	 */
	public function getWebMessage() {
		return isset($this->container['WebMessage']) ? $this->container['WebMessage'] : null;
	}

	/**
	 * Set the [WebMessage] field.
	 * @param string $WebMessage
	 */
	public function setWebMessage($WebMessage) {
		$this->container['WebMessage'] = $WebMessage;
	}

    
    /**
	 * Get the [IsCompany] field.
	 * @return bool
	 */
	public function getIsCompany() {
		return isset($this->container['IsCompany']) ? $this->container['IsCompany'] : null;
	}

	/**
	 * Set the [IsCompany] field.
	 * @param bool $IsCompany
	 */
	public function setIsCompany($IsCompany) {
		$this->container['IsCompany'] = $IsCompany;
	}

    
    /**
	 * Get the [ColorID] field.
	 * @return integer
	 */
	public function getColorID() {
		return isset($this->container['ColorID']) ? $this->container['ColorID'] : null;
	}

	/**
	 * Set the [ColorID] field.
	 * @param integer $ColorID
	 */
	public function setColorID($ColorID) {
		$this->container['ColorID'] = $ColorID;
	}

    
    /**
	 * Get the [PropertyID] field.
	 * @return integer
	 */
	public function getPropertyID() {
		return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
	 * @param integer $PropertyID
	 */
	public function setPropertyID($PropertyID) {
		$this->container['PropertyID'] = $PropertyID;
	}

    
    /**
	 * Get the [Comment] field.
	 * @return string
	 */
	public function getComment() {
		return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
	 * @param string $Comment
	 */
	public function setComment($Comment) {
		$this->container['Comment'] = $Comment;
	}

    
    /**
	 * Get the [RentDueDay] field.
	 * @return integer
	 */
	public function getRentDueDay() {
		return isset($this->container['RentDueDay']) ? $this->container['RentDueDay'] : null;
	}

	/**
	 * Set the [RentDueDay] field.
	 * @param integer $RentDueDay
	 */
	public function setRentDueDay($RentDueDay) {
		$this->container['RentDueDay'] = $RentDueDay;
	}

    
    /**
	 * Get the [RentPeriod] field.
	 * @return string
	 */
	public function getRentPeriod() {
		return isset($this->container['RentPeriod']) ? $this->container['RentPeriod'] : null;
	}

	/**
	 * Set the [RentPeriod] field.
	 * @param string $RentPeriod
	 */
	public function setRentPeriod($RentPeriod) {
		$this->container['RentPeriod'] = $RentPeriod;
	}

    
    /**
	 * Get the [DoNotChargeLateFees] field.
	 * @return bool
	 */
	public function getDoNotChargeLateFees() {
		return isset($this->container['DoNotChargeLateFees']) ? $this->container['DoNotChargeLateFees'] : null;
	}

	/**
	 * Set the [DoNotChargeLateFees] field.
	 * @param bool $DoNotChargeLateFees
	 */
	public function setDoNotChargeLateFees($DoNotChargeLateFees) {
		$this->container['DoNotChargeLateFees'] = $DoNotChargeLateFees;
	}

    
    /**
	 * Get the [DoNotPrintStatements] field.
	 * @return bool
	 */
	public function getDoNotPrintStatements() {
		return isset($this->container['DoNotPrintStatements']) ? $this->container['DoNotPrintStatements'] : null;
	}

	/**
	 * Set the [DoNotPrintStatements] field.
	 * @param bool $DoNotPrintStatements
	 */
	public function setDoNotPrintStatements($DoNotPrintStatements) {
		$this->container['DoNotPrintStatements'] = $DoNotPrintStatements;
	}

    
    /**
	 * Get the [DoNotAcceptChecks] field.
	 * @return bool
	 */
	public function getDoNotAcceptChecks() {
		return isset($this->container['DoNotAcceptChecks']) ? $this->container['DoNotAcceptChecks'] : null;
	}

	/**
	 * Set the [DoNotAcceptChecks] field.
	 * @param bool $DoNotAcceptChecks
	 */
	public function setDoNotAcceptChecks($DoNotAcceptChecks) {
		$this->container['DoNotAcceptChecks'] = $DoNotAcceptChecks;
	}

    
    /**
	 * Get the [DoNotAcceptPayments] field.
	 * @return bool
	 */
	public function getDoNotAcceptPayments() {
		return isset($this->container['DoNotAcceptPayments']) ? $this->container['DoNotAcceptPayments'] : null;
	}

	/**
	 * Set the [DoNotAcceptPayments] field.
	 * @param bool $DoNotAcceptPayments
	 */
	public function setDoNotAcceptPayments($DoNotAcceptPayments) {
		$this->container['DoNotAcceptPayments'] = $DoNotAcceptPayments;
	}

    
    /**
	 * Get the [IsProspect] field.
	 * @return bool
	 */
	public function getIsProspect() {
		return isset($this->container['IsProspect']) ? $this->container['IsProspect'] : null;
	}

	/**
	 * Set the [IsProspect] field.
	 * @param bool $IsProspect
	 */
	public function setIsProspect($IsProspect) {
		$this->container['IsProspect'] = $IsProspect;
	}

    
    /**
	 * Get the [Property] field.
	 * @return \RentManager\Models\Property
	 */
	public function getProperty() {
		return isset($this->container['Property']) ? $this->container['Property'] : null;
	}

	/**
	 * Set the [Property] field.
	 * @param \RentManager\Models\Property $Property
	 */
	public function setProperty($Property) {
		$this->container['Property'] = $Property;
	}

    
    /**
	 * Get the [Leases] field.
	 * @return \RentManager\Models\Lease[]
	 */
	public function getLeases() {
		return isset($this->container['Leases']) ? $this->container['Leases'] : null;
	}

	/**
	 * Set the [Leases] field.
	 * @param \RentManager\Models\Lease[] $Leases
	 */
	public function setLeases($Leases) {
		$this->container['Leases'] = $Leases;
	}

    
    /**
	 * Get the [WebUserAccounts] field.
	 * @return \RentManager\Models\WebUserAccount[]
	 */
	public function getWebUserAccounts() {
		return isset($this->container['WebUserAccounts']) ? $this->container['WebUserAccounts'] : null;
	}

	/**
	 * Set the [WebUserAccounts] field.
	 * @param \RentManager\Models\WebUserAccount[] $WebUserAccounts
	 */
	public function setWebUserAccounts($WebUserAccounts) {
		$this->container['WebUserAccounts'] = $WebUserAccounts;
	}

    
    /**
	 * Get the [PrimaryContact] field.
	 * @return \RentManager\Models\Contact
	 */
	public function getPrimaryContact() {
		return isset($this->container['PrimaryContact']) ? $this->container['PrimaryContact'] : null;
	}

	/**
	 * Set the [PrimaryContact] field.
	 * @param \RentManager\Models\Contact $PrimaryContact
	 */
	public function setPrimaryContact($PrimaryContact) {
		$this->container['PrimaryContact'] = $PrimaryContact;
	}

    
    /**
	 * Get the [UserDefinedValues] field.
	 * @return \RentManager\Models\UserDefinedValue[]
	 */
	public function getUserDefinedValues() {
		return isset($this->container['UserDefinedValues']) ? $this->container['UserDefinedValues'] : null;
	}

	/**
	 * Set the [UserDefinedValues] field.
	 * @param \RentManager\Models\UserDefinedValue[] $UserDefinedValues
	 */
	public function setUserDefinedValues($UserDefinedValues) {
		$this->container['UserDefinedValues'] = $UserDefinedValues;
	}

    
    /**
	 * Get the [Balance] field.
	 * @return double
	 */
	public function getBalance() {
		return isset($this->container['Balance']) ? $this->container['Balance'] : null;
	}

	/**
	 * Set the [Balance] field.
	 * @param double $Balance
	 */
	public function setBalance($Balance) {
		$this->container['Balance'] = $Balance;
	}

    
    /**
	 * Get the [Charges] field.
	 * @return \RentManager\Models\Charge[]
	 */
	public function getCharges() {
		return isset($this->container['Charges']) ? $this->container['Charges'] : null;
	}

	/**
	 * Set the [Charges] field.
	 * @param \RentManager\Models\Charge[] $Charges
	 */
	public function setCharges($Charges) {
		$this->container['Charges'] = $Charges;
	}

    
    /**
	 * Get the [RecurringCharges] field.
	 * @return \RentManager\Models\RecurringCharge[]
	 */
	public function getRecurringCharges() {
		return isset($this->container['RecurringCharges']) ? $this->container['RecurringCharges'] : null;
	}

	/**
	 * Set the [RecurringCharges] field.
	 * @param \RentManager\Models\RecurringCharge[] $RecurringCharges
	 */
	public function setRecurringCharges($RecurringCharges) {
		$this->container['RecurringCharges'] = $RecurringCharges;
	}

    
    #endregion
}