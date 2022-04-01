<?php
            //ModuleSMS
		
        require '../../../admin/header.php';
        
// verification token
//

        use Genesis as g;
        use Request as R;
        
        header("Access-Control-Allow-Origin: *");
                

		$smsCtrl = new SMSController();
		
     (new Request('hello'));

     switch (R::get('path')) {
                
        case 'sms._new':
                g::json_encode($smsCtrl->formView());
                break;
        case 'sms.create':
                g::json_encode($smsCtrl->createAction());
                break;
        case 'sms._edit':
                g::json_encode($smsCtrl->formView(R::get("id")));
                break;
        case 'sms.update':
                g::json_encode($smsCtrl->updateAction(R::get("id")));
                break;
        case 'sms._show':
                $smsCtrl->detailView(R::get("id"));
                break;
        case 'sms._delete':
                g::json_encode($smsCtrl->deleteAction(R::get("id")));
                break;
        case 'sms._deletegroup':
                g::json_encode($smsCtrl->deletegroupAction(R::get("ids")));
                break;
        case 'sms.datatable':
                g::json_encode($smsCtrl->datatable(R::get('next'), R::get('per_page')));
                break;

	
        default:
            g::json_encode(['success' => false, 'error' => ['message' => "404 : action note found", 'route' => R::get('path')]]);
            break;
     }

