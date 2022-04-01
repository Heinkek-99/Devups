<?php 

        
use Genesis as g;

class HistoryForm extends FormManager{

    public $history;

    public static function init(\History $history, $action = ""){
        $fb = new HistoryForm($history, $action);
        $fb->history = $history;
        return $fb;
    }

    public function buildForm()
    {
    
        
            $this->fields['SendNumber'] = [
                "label" => t('History.SendNumber'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->history->getSendNumber(), 
        ];

            $this->fields['Text'] = [
                "label" => t('History.Text'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->history->getText(), 
        ];

            $this->fields['DateTime'] = [
                "label" => t('History.DateTime'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->history->getDateTime(), 
        ];

           
        return  $this;
    
    }

    public static function renderWidget($id = null, $action = "create")
    {
        Genesis::renderView("history.formWidget", self::getFormData($id, $action));
    }
    
}
    