<?php 

        
use Genesis as g;

class UsersmsForm extends FormManager{

    public $usersms;

    public static function init(\Usersms $usersms, $action = ""){
        $fb = new UsersmsForm($usersms, $action);
        $fb->usersms = $usersms;
        return $fb;
    }

    public function buildForm()
    {
    
        
            $this->fields['FirstName'] = [
                "label" => t('UserSMS.FirstName'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getFirstName(), 
        ];

            $this->fields['LastName'] = [
                "label" => t('UserSMS.LastName'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getLastName(), 
        ];

            $this->fields['UserName'] = [
                "label" => t('UserSMS.UserName'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getUserName(), 
        ];

            $this->fields['Email'] = [
                "label" => t('UserSMS.Email'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getEmail(), 
        ];

            $this->fields['PhoneNumber'] = [
                "label" => t('UserSMS.PhoneNumber'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getPhoneNumber(), 
        ];

            $this->fields['Password'] = [
                "label" => t('UserSMS.Password'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->usersms->getPassword(), 
        ];

           
        return  $this;
    
    }

    public static function renderWidget($id = null, $action = "create")
    {
        Genesis::renderView("usersms.formWidget", self::getFormData($id, $action));
    }
    
}
    