<?php 

        
use Genesis as g;

class StorageForm extends FormManager{

    public $storage;

    public static function init(\Storage $storage, $action = ""){
        $fb = new StorageForm($storage, $action);
        $fb->storage = $storage;
        return $fb;
    }

    public function buildForm()
    {
    
        
            $this->fields['name'] = [
                "label" => t('storage.name'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->storage->getName(), 
        ];

           
        return  $this;
    
    }

    public static function renderWidget($id = null, $action = "create")
    {
        Genesis::renderView("storage.formWidget", self::getFormData($id, $action));
    }
    
}
    