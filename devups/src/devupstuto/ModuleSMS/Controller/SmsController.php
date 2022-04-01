<?php 

            
use dclass\devups\Controller\Controller;

class SmsController extends Controller{

    public function listView(){

        $this->datatable = SmsTable::init(new Sms())->buildindextable();

        self::$jsfiles[] = Sms::classpath('Resource/js/smsCtrl.js');

        $this->entitytarget = 'Sms';
        $this->title = "Manage Sms";
        
        $this->renderListView();

    }

    public function datatable() {
    
        return ['success' => true,
            'datatable' => SmsTable::init(new Sms())->router()->getTableRest(),
        ];
        
    }

    public function formView($id = null)
    {
        $sms = new Sms();
        $action = Sms::classpath("services.php?path=sms.create");
        if ($id) {
            $action = Sms::classpath("services.php?path=sms.update&id=" . $id);
            $sms = Sms::find($id);
        }

        return ['success' => true,
            'form' => SmsForm::init($sms, $action)
                ->buildForm()
                ->addDformjs()
                ->renderForm(),
        ];
    }

    public function createAction($sms_form = null ){
        extract($_POST);

        $sms = $this->form_fillingentity(new Sms(), $sms_form);
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'sms' => $sms,
                            'action' => 'create', 
                            'error' => $this->error);
        } 
        

        $id = $sms->__insert();
        return 	array(	'success' => true,
                        'sms' => $sms,
                        'tablerow' => SmsTable::init()->router()->getSingleRowRest($sms),
                        'detail' => '');

    }

    public function updateAction($id, $sms_form = null){
        extract($_POST);
            
        $sms = $this->form_fillingentity(new Sms($id), $sms_form);
     
        if ( $this->error ) {
            return 	array(	'success' => false,
                            'sms' => $sms,
                            'action_form' => 'update&id='.$id,
                            'error' => $this->error);
        }
        
        $sms->__update();
        return 	array(	'success' => true,
                        'sms' => $sms,
                        'tablerow' => SmsTable::init()->router()->getSingleRowRest($sms),
                        'detail' => '');
                        
    }
    

    public function detailView($id)
    {

        $this->entitytarget = 'Sms';
        $this->title = "Detail Sms";

        $sms = Sms::find($id);

        $this->renderDetailView(
            SmsTable::init()
                ->builddetailtable()
                ->renderentitydata($sms)
        );

    }
    
    public function deleteAction($id){
    
        Sms::delete($id);
        
        return 	array(	'success' => true, 
                        'detail' => ''); 
    }
    

    public function deletegroupAction($ids)
    {

        Sms::where("id")->in($ids)->delete();

        return array('success' => true,
                'detail' => ''); 

    }

}
