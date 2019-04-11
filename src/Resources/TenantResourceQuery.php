<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Tenant resource.
 */
class TenantResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Tenant";
    }

    /**
	 * Create a new instance of a Tenant resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  TenantResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [TenantID] field.
    * @return  TenantResourceQuery
    */
    public function filterByTenantID($value, $operator = "=") 
    {
        $this->addFilter("TenantID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [TenantDisplayID] field.
    * @return  TenantResourceQuery
    */
    public function filterByTenantDisplayID($value, $operator = "=") 
    {
        $this->addFilter("TenantDisplayID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Name] field.
    * @return  TenantResourceQuery
    */
    public function filterByName($value, $operator = "=") 
    {
        $this->addFilter("Name", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [FirstName] field.
    * @return  TenantResourceQuery
    */
    public function filterByFirstName($value, $operator = "=") 
    {
        $this->addFilter("FirstName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [LastName] field.
    * @return  TenantResourceQuery
    */
    public function filterByLastName($value, $operator = "=") 
    {
        $this->addFilter("LastName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [WebMessage] field.
    * @return  TenantResourceQuery
    */
    public function filterByWebMessage($value, $operator = "=") 
    {
        $this->addFilter("WebMessage", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsCompany] field.
    * @return  TenantResourceQuery
    */
    public function filterByIsCompany($value, $operator = "=") 
    {
        $this->addFilter("IsCompany", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ColorID] field.
    * @return  TenantResourceQuery
    */
    public function filterByColorID($value, $operator = "=") 
    {
        $this->addFilter("ColorID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PropertyID] field.
    * @return  TenantResourceQuery
    */
    public function filterByPropertyID($value, $operator = "=") 
    {
        $this->addFilter("PropertyID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  TenantResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [RentDueDay] field.
    * @return  TenantResourceQuery
    */
    public function filterByRentDueDay($value, $operator = "=") 
    {
        $this->addFilter("RentDueDay", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [RentPeriod] field.
    * @return  TenantResourceQuery
    */
    public function filterByRentPeriod($value, $operator = "=") 
    {
        $this->addFilter("RentPeriod", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [DoNotChargeLateFees] field.
    * @return  TenantResourceQuery
    */
    public function filterByDoNotChargeLateFees($value, $operator = "=") 
    {
        $this->addFilter("DoNotChargeLateFees", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [DoNotPrintStatements] field.
    * @return  TenantResourceQuery
    */
    public function filterByDoNotPrintStatements($value, $operator = "=") 
    {
        $this->addFilter("DoNotPrintStatements", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [DoNotAcceptChecks] field.
    * @return  TenantResourceQuery
    */
    public function filterByDoNotAcceptChecks($value, $operator = "=") 
    {
        $this->addFilter("DoNotAcceptChecks", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [DoNotAcceptPayments] field.
    * @return  TenantResourceQuery
    */
    public function filterByDoNotAcceptPayments($value, $operator = "=") 
    {
        $this->addFilter("DoNotAcceptPayments", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsProspect] field.
    * @return  TenantResourceQuery
    */
    public function filterByIsProspect($value, $operator = "=") 
    {
        $this->addFilter("IsProspect", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Property] resource.
    * @return  TenantResourceQuery
    */
    public function embedProperty() {

        $this->addEmbed("Property");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Leases] resource.
    * @return  TenantResourceQuery
    */
    public function embedLeases() {

        $this->addEmbed("Leases");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [WebUserAccounts] resource.
    * @return  TenantResourceQuery
    */
    public function embedWebUserAccounts() {

        $this->addEmbed("WebUserAccounts");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [PrimaryContact] resource.
    * @return  TenantResourceQuery
    */
    public function embedPrimaryContact() {

        $this->addEmbed("PrimaryContact");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UserDefinedValues] resource.
    * @return  TenantResourceQuery
    */
    public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Balance] resource.
    * @return  TenantResourceQuery
    */
    public function embedBalance() {

        $this->addEmbed("Balance");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Contacts] resource.
    * @return  TenantResourceQuery
    */
    public function embedContacts() {

        $this->addEmbed("Contacts");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Charges] resource.
    * @return  TenantResourceQuery
    */
    public function embedCharges() {

        $this->addEmbed("Charges");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Credits] resource.
    * @return  TenantResourceQuery
    */
    public function embedCredits() {

        $this->addEmbed("Credits");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [RecurringCharges] resource.
    * @return  TenantResourceQuery
    */
    public function embedRecurringCharges() {

        $this->addEmbed("RecurringCharges");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Payments] resource.
    * @return  TenantResourceQuery
    */
    public function embedPayments() {

        $this->addEmbed("Payments");
        return $this;
    }
    
    
    
    /**
	 * Save a Tenant model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Tenant|\RentManager\Models\Tenant[] $model
     * @return  \RentManager\Models\Tenant|\RentManager\Models\Tenant[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Tenant from the Rent Manager API.
	 * @return  \RentManager\Models\Tenant
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Tenant collection from the Rent Manager API.
     * @return  \RentManager\Models\Tenant[]
     */
    public function find() {
        return parent::find();
    }
}