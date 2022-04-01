<?php 


use dclass\devups\Datatable\Datatable as Datatable;

class HistoryTable extends Datatable{
    

    public function __construct($history = null, $datatablemodel = [])
    {
        parent::__construct($history, $datatablemodel);
    }

    public static function init(\History $history = null){
    
        $dt = new HistoryTable($history);
        $dt->entity = $history;
        
        return $dt;
    }

    public function buildindextable(){

        $this->base_url = __env."admin/";
        $this->datatablemodel = [
'id' => ['header' => t('#'),], 
'SendNumber' => ['header' => t('SendNumber'),], 
'Text' => ['header' => t('Text'),], 
'DateTime' => ['header' => t('DateTime'),]
];

        return $this;
    }
    
    public function builddetailtable()
    {
        $this->datatablemodel = [
['label' => t('SendNumber'), 'value' => 'SendNumber'], 
['label' => t('Text'), 'value' => 'Text'], 
['label' => t('DateTime'), 'value' => 'DateTime']
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
