<?php 

        
use Genesis as g;

class PurchasehistoryForm extends FormManager{

    public $purchasehistory;

    public static function init(\Purchasehistory $purchasehistory, $action = ""){
        $fb = new PurchasehistoryForm($purchasehistory, $action);
        $fb->purchasehistory = $purchasehistory;
        return $fb;
    }

    public function buildForm()
    {
    
        
            $this->fields['PackageName'] = [
                "label" => t('PurchaseHistory.PackageName'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->purchasehistory->getPackageName(), 
        ];

            $this->fields['PackageType'] = [
                "label" => t('PurchaseHistory.PackageType'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->purchasehistory->getPackageType(), 
        ];

            $this->fields['Number_f_sms'] = [
                "label" => t('PurchaseHistory.Number_f_sms'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->purchasehistory->getNumber_f_sms(), 
        ];

            $this->fields['Price'] = [
                "label" => t('PurchaseHistory.Price'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->purchasehistory->getPrice(), 
        ];

            $this->fields['Validity_Date'] = [
                "label" => t('PurchaseHistory.Validity_Date'), 
			"type" => FORMTYPE_TEXT, 
                "value" => $this->purchasehistory->getValidity_Date(), 
        ];

           
        return  $this;
    
    }

    public static function renderWidget($id = null, $action = "create")
    {
        Genesis::renderView("purchasehistory.formWidget", self::getFormData($id, $action));
    }
    
}
    