<?php 


use dclass\devups\Datatable\Datatable as Datatable;

class StorageTable extends Datatable{
    

    public function __construct($storage = null, $datatablemodel = [])
    {
        parent::__construct($storage, $datatablemodel);
    }

    public static function init(\Storage $storage = null){
    
        $dt = new StorageTable($storage);
        $dt->entity = $storage;
        
        return $dt;
    }

    public function buildindextable(){

        $this->base_url = __env."admin/";
        $this->datatablemodel = [
'id' => ['header' => t('#'),], 
'name' => ['header' => t('Name'),]
];

        return $this;
    }
    
    public function builddetailtable()
    {
        $this->datatablemodel = [
['label' => t('name'), 'value' => 'name']
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
