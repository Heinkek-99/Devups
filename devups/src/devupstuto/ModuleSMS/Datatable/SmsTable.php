<?php 


use dclass\devups\Datatable\Datatable as Datatable;

class SmsTable extends Datatable{
    

    public function __construct($sms = null, $datatablemodel = [])
    {
        parent::__construct($sms, $datatablemodel);
    }

    public static function init(\Sms $sms = null){
    
        $dt = new SmsTable($sms);
        $dt->entity = $sms;
        
        return $dt;
    }

    public function buildindextable(){

        $this->base_url = __env."admin/";
        $this->datatablemodel = [
'id' => ['header' => t('#'),], 
'SMSname' => ['header' => t('SMSname'),], 
'SMSType' => ['header' => t('SMSType'),], 
'SMSNumber' => ['header' => t('SMSNumber'),], 
'SMSPrice' => ['header' => t('SMSPrice'),], 
'Validation' => ['header' => t('Validation'),]
];

        return $this;
    }
    
    public function builddetailtable()
    {
        $this->datatablemodel = [
['label' => t('SMSname'), 'value' => 'SMSname'], 
['label' => t('SMSType'), 'value' => 'SMSType'], 
['label' => t('SMSNumber'), 'value' => 'SMSNumber'], 
['label' => t('SMSPrice'), 'value' => 'SMSPrice'], 
['label' => t('Validation'), 'value' => 'Validation']
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
