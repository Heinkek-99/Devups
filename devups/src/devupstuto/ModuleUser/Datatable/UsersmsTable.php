<?php 


use dclass\devups\Datatable\Datatable as Datatable;

class UsersmsTable extends Datatable{
    

    public function __construct($usersms = null, $datatablemodel = [])
    {
        parent::__construct($usersms, $datatablemodel);
    }

    public static function init(\Usersms $usersms = null){
    
        $dt = new UsersmsTable($usersms);
        $dt->entity = $usersms;
        
        return $dt;
    }

    public function buildindextable(){

        $this->base_url = __env."admin/";
        $this->datatablemodel = [
'id' => ['header' => t('#'),], 
'FirstName' => ['header' => t('FirstName'),], 
'LastName' => ['header' => t('LastName'),], 
'UserName' => ['header' => t('UserName'),], 
'Email' => ['header' => t('Email'),], 
'PhoneNumber' => ['header' => t('PhoneNumber'),], 
'Password' => ['header' => t('Password'),]

];

        return $this;
    }
    
    public function builddetailtable()
    {
        $this->datatablemodel = [
['label' => t('FirstName'), 'value' => 'FirstName'], 
['label' => t('LastName'), 'value' => 'LastName'], 
['label' => t('UserName'), 'value' => 'UserName'], 
['label' => t('Email'), 'value' => 'Email'], 
['label' => t('PhoneNumber'), 'value' => 'PhoneNumber'], 
['label' => t('Password'), 'value' => 'Password']
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
