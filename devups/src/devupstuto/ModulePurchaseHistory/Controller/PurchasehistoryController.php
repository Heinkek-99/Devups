<?php 

            
use dclass\devups\Controller\Controller;

class PurchasehistoryController extends Controller{

    public function listView(){

        $this->datatable = PurchasehistoryTable::init(new Purchasehistory())->buildindextable();

        self::$jsfiles[] = Purchasehistory::classpath('Resource/js/purchasehistoryCtrl.js');

        $this->entitytarget = 'Purchasehistory';
        $this->title = "Manage Purchasehistory";
        
        $this->renderListView();

    }

    public function datatable() {
    
        return ['success' => true,
            'datatable' => PurchasehistoryTable::init(new Purchasehistory())->router()->getTableRest(),
        ];
        
    }

    public function formView($id = null)
    {
        $purchasehistory = new Purchasehistory();
        $action = Purchasehistory::classpath("services.php?path=purchasehistory.create");
        if ($id) {
            $action = Purchasehistory::classpath("services.php?path=purchasehistory.update&id=" . $id);
            $purchasehistory = Purchasehistory::find($id);
        }

        return ['success' => true,
            'form' => PurchasehistoryForm::init($purchasehistory, $action)
                ->buildForm()
                ->addDformjs()
                ->renderForm(),
        ];
    }

    public function createAction($purchasehistory_form = null ){
        extract($_POST);

        $purchasehistory = $this->form_fillingentity(new Purchasehistory(), $purchasehistory_form);
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'purchasehistory' => $purchasehistory,
                            'action' => 'create', 
                            'error' => $this->error);
        } 
        

        $id = $purchasehistory->__insert();
        return 	array(	'success' => true,
                        'purchasehistory' => $purchasehistory,
                        'tablerow' => PurchasehistoryTable::init()->router()->getSingleRowRest($purchasehistory),
                        'detail' => '');

    }

    public function updateAction($id, $purchasehistory_form = null){
        extract($_POST);
            
        $purchasehistory = $this->form_fillingentity(new Purchasehistory($id), $purchasehistory_form);
     
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'purchasehistory' => $purchasehistory,
                            'action_form' => 'update&id='.$id,
                            'error' => $this->error);
        }
        
        $purchasehistory->__update();
        return 	array(	'success' => true,
                        'purchasehistory' => $purchasehistory,
                        'tablerow' => PurchasehistoryTable::init()->router()->getSingleRowRest($purchasehistory),
                        'detail' => '');
                        
    }
    

    public function detailView($id)
    {

        $this->entitytarget = 'Purchasehistory';
        $this->title = "Detail Purchasehistory";

        $purchasehistory = Purchasehistory::find($id);

        $this->renderDetailView(
            PurchasehistoryTable::init()
                ->builddetailtable()
                ->renderentitydata($purchasehistory)
        );

    }
    
    public function deleteAction($id){
    
        Purchasehistory::delete($id);
        
        return 	array(	'success' => true, 
                        'detail' => ''); 
    }
    

    public function deletegroupAction($ids)
    {

        Purchasehistory::where("id")->in($ids)->delete();

        return array('success' => true,
                'detail' => ''); 

    }

}
