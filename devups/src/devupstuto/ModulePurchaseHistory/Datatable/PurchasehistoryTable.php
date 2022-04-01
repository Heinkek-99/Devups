<?php 


use dclass\devups\Datatable\Datatable as Datatable;

class PurchasehistoryTable extends Datatable{
    

    public function __construct($purchasehistory = null, $datatablemodel = [])
    {
        parent::__construct($purchasehistory, $datatablemodel);
    }

    public static function init(\Purchasehistory $purchasehistory = null){
    
        $dt = new PurchasehistoryTable($purchasehistory);
        $dt->entity = $purchasehistory;
        
        return $dt;
    }

    public function buildindextable(){

        $this->base_url = __env."admin/";
        $this->datatablemodel = [
'id' => ['header' => t('#'),], 
'PackageName' => ['header' => t('PackageName'),], 
'PackageType' => ['header' => t('PackageType'),], 
'Number_f_sms' => ['header' => t('Number_f_sms'),], 
'Price' => ['header' => t('Price'),], 
'Validity_Date' => ['header' => t('Validity_Date'),]
];

        return $this;
    }
    
    public function builddetailtable()
    {
        $this->datatablemodel = [
['label' => t('PackageName'), 'value' => 'PackageName'], 
['label' => t('PackageType'), 'value' => 'PackageType'], 
['label' => t('Number_f_sms'), 'value' => 'Number_f_sms'], 
['label' => t('Price'), 'value' => 'Price'], 
['label' => t('Validity_Date'), 'value' => 'Validity_Date']
];
        // TODO: overwrite datatable attribute for this view
        return $this;
    }

    public function router()
    {
        $tablemodel = Request::get("tablemodel", null);
        if ($tablemodel && method_exists($this, "build" . $tablemodel . "table") && $result = call_user_func(array($this, "build" . $tablemodel . "table"))) {
            return $result;
        } else
            switch ($tablemodel) {
                // case "": return this->
                default:
                    return $this->buildindextable();
            }

    }
    
}
