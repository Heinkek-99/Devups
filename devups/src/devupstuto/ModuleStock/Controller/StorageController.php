<?php 

            
use dclass\devups\Controller\Controller;

class StorageController extends Controller{

    public function listView(){

        $this->datatable = StorageTable::init(new Storage())->buildindextable();

        self::$jsfiles[] = Storage::classpath('Resource/js/storageCtrl.js');

        $this->entitytarget = 'Storage';
        $this->title = "Manage Storage";
        
        $this->renderListView();

    }

    public function datatable() {
    
        return ['success' => true,
            'datatable' => StorageTable::init(new Storage())->router()->getTableRest(),
        ];
        
    }

    public function formView($id = null)
    {
        $storage = new Storage();
        $action = Storage::classpath("services.php?path=storage.create");
        if ($id) {
            $action = Storage::classpath("services.php?path=storage.update&id=" . $id);
            $storage = Storage::find($id);
        }

        return ['success' => true,
            'form' => StorageForm::init($storage, $action)
                ->buildForm()
                ->addDformjs()
                ->renderForm(),
        ];
    }

    public function createAction($storage_form = null ){
        extract($_POST);

        $storage = $this->form_fillingentity(new Storage(), $storage_form);
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'storage' => $storage,
                            'action' => 'create', 
                            'error' => $this->error);
        } 
        

        $id = $storage->__insert();
        return 	array(	'success' => true,
                        'storage' => $storage,
                        'tablerow' => StorageTable::init()->router()->getSingleRowRest($storage),
                        'detail' => '');

    }

    public function updateAction($id, $storage_form = null){
        extract($_POST);
            
        $storage = $this->form_fillingentity(new Storage($id), $storage_form);
     
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'storage' => $storage,
                            'action_form' => 'update&id='.$id,
                            'error' => $this->error);
        }
        
        $storage->__update();
        return 	array(	'success' => true,
                        'storage' => $storage,
                        'tablerow' => StorageTable::init()->router()->getSingleRowRest($storage),
                        'detail' => '');
                        
    }
    

    public function detailView($id)
    {

        $this->entitytarget = 'Storage';
        $this->title = "Detail Storage";

        $storage = Storage::find($id);

        $this->renderDetailView(
            StorageTable::init()
                ->builddetailtable()
                ->renderentitydata($storage)
        );

    }
    
    public function deleteAction($id){
    
        Storage::delete($id);
        
        return 	array(	'success' => true, 
                        'detail' => ''); 
    }
    

    public function deletegroupAction($ids)
    {

        Storage::where("id")->in($ids)->delete();

        return array('success' => true,
                'detail' => ''); 

    }

}
