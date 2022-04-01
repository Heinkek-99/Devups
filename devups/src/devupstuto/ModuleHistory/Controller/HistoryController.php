<?php 

            
use dclass\devups\Controller\Controller;

class HistoryController extends Controller{

    public function listView(){

        $this->datatable = HistoryTable::init(new History())->buildindextable();

        self::$jsfiles[] = History::classpath('Resource/js/historyCtrl.js');

        $this->entitytarget = 'History';
        $this->title = "Manage History";
        
        $this->renderListView();

    }

    public function datatable() {
    
        return ['success' => true,
            'datatable' => HistoryTable::init(new History())->router()->getTableRest(),
        ];
        
    }

    public function formView($id = null)
    {
        $history = new History();
        $action = History::classpath("services.php?path=history.create");
        if ($id) {
            $action = History::classpath("services.php?path=history.update&id=" . $id);
            $history = History::find($id);
        }

        return ['success' => true,
            'form' => HistoryForm::init($history, $action)
                ->buildForm()
                ->addDformjs()
                ->renderForm(),
        ];
    }

    public function createAction($history_form = null ){
        extract($_POST);

        $history = $this->form_fillingentity(new History(), $history_form);
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'history' => $history,
                            'action' => 'create', 
                            'error' => $this->error);
        } 
        

        $id = $history->__insert();
        return 	array(	'success' => true,
                        'history' => $history,
                        'tablerow' => HistoryTable::init()->router()->getSingleRowRest($history),
                        'detail' => '');

    }

    public function updateAction($id, $history_form = null){
        extract($_POST);
            
        $history = $this->form_fillingentity(new History($id), $history_form);
     
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'history' => $history,
                            'action_form' => 'update&id='.$id,
                            'error' => $this->error);
        }
        
        $history->__update();
        return 	array(	'success' => true,
                        'history' => $history,
                        'tablerow' => HistoryTable::init()->router()->getSingleRowRest($history),
                        'detail' => '');
                        
    }
    

    public function detailView($id)
    {

        $this->entitytarget = 'History';
        $this->title = "Detail History";

        $history = History::find($id);

        $this->renderDetailView(
            HistoryTable::init()
                ->builddetailtable()
                ->renderentitydata($history)
        );

    }
    
    public function deleteAction($id){
    
        History::delete($id);
        
        return 	array(	'success' => true, 
                        'detail' => ''); 
    }
    

    public function deletegroupAction($ids)
    {

        History::where("id")->in($ids)->delete();

        return array('success' => true,
                'detail' => ''); 

    }

}
