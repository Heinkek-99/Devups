<?php 

        
use Genesis as g;

class SmsForm extends FormManager{

    public $sms;

    public static function init(\Sms $sms, $action = ""){
        $fb = new SmsForm($sms, $action);
        $fb->sms = $sms;
        return $fb;
    }

    public function buildForm()
    {
    
        
            $this->fields['SMSname'] = [
                "label" => t('SMS.SMSname'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->sms->getSMSname(), 
        ];

            $this->fields['SMSType'] = [
                "label" => t('SMS.SMSType'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->sms->getSMSType(), 
        ];

            $this->fields['SMSNumber'] = [
                "label" => t('SMS.SMSNumber'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->sms->getSMSNumber(), 
        ];

            $this->fields['SMSPrice'] = [
                "label" => t('SMS.SMSPrice'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->sms->getSMSPrice(), 
        ];

            $this->fields['Validation'] = [
                "label" => t('SMS.Validation'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->sms->getValidation(), 
        ];

           
        return  $this;
    
    }

    public static function renderWidget($id = null, $action = "create")
    {
        Genesis::renderView("sms.formWidget", self::getFormData($id, $action));
    }
    
}
    