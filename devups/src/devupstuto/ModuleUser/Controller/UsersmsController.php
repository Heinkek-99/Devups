<?php 

            
use dclass\devups\Controller\Controller;

class UsersmsController extends Controller{

    public function listView(){

        $this->datatable = UsersmsTable::init(new Usersms())->buildindextable();

        self::$jsfiles[] = Usersms::classpath('Resource/js/usersmsCtrl.js');

        $this->entitytarget = 'Usersms';
        $this->title = "Manage Usersms";
        
        $this->renderListView();

    }

    public function datatable() {
    
        return ['success' => true,
            'datatable' => UsersmsTable::init(new Usersms())->router()->getTableRest(),
        ];
        
    }

    public function formView($id = null)
    {
        $usersms = new Usersms();
        $action = Usersms::classpath("services.php?path=usersms.create");
        if ($id) {
            $action = Usersms::classpath("services.php?path=usersms.update&id=" . $id);
            $usersms = Usersms::find($id);
        }

        return ['success' => true,
            'form' => UsersmsForm::init($usersms, $action)
                ->buildForm()
                ->addDformjs()
                ->renderForm(),
        ];
    }

    public function createAction($usersms_form = null ){
        extract($_POST);


        // $usersms = $this->form_fillingentity(new Usersms(), $usersms_form);
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'usersms' => $usersms,
                            'action' => 'create', 
                            'error' => $this->error);
        } 
        

        $id = $usersms->__insert();
        return 	array(	'success' => true,
                        'usersms' => $usersms,
                        'tablerow' => UsersmsTable::init()->router()->getSingleRowRest($usersms),
                        'detail' => '');

    }

    public function updateAction($id, $usersms_form = null){
        extract($_POST);
            
        $usersms = $this->form_fillingentity(new Usersms($id), $usersms_form);
     
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'usersms' => $usersms,
                            'action_form' => 'update&id='.$id,
                            'error' => $this->error);
        }
        
        $usersms->__update();
        return 	array(	'success' => true,
                        'usersms' => $usersms,
                        'tablerow' => UsersmsTable::init()->router()->getSingleRowRest($usersms),
                        'detail' => '');
                        
    }
    

    public function detailView($id)
    {

        $this->entitytarget = 'Usersms';
        $this->title = "Detail Usersms";

        $usersms = Usersms::find($id);

        $this->renderDetailView(
            UsersmsTable::init()
                ->builddetailtable()
                ->renderentitydata($usersms)
        );

    }
    
    public function deleteAction($id){
    
        Usersms::delete($id);
        
        return 	array(	'success' => true, 
                        'detail' => ''); 
    }
    

    public function deletegroupAction($ids)
    {

        Usersms::where("id")->in($ids)->delete();

        return array('success' => true,
                'detail' => ''); 

    }

}
