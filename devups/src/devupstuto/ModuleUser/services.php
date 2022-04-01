<?php
            //ModuleUser
		
        require '../../../admin/header.php';
        
// verification token
//

        use Genesis as g;
        use Request as R;
        
        header("Access-Control-Allow-Origin: *");
                

		$usersmsCtrl = new UserSMSController();
		
     (new Request('hello'));

     switch (R::get('path')) {
                
        case 'usersms._new':
                g::json_encode($usersmsCtrl->formView());
                break;
        case 'usersms.create':
                g::json_encode($usersmsCtrl->createAction());
                break;
        case 'usersms._edit':
                g::json_encode($usersmsCtrl->formView(R::get("id")));
                break;
        case 'usersms.update':
                g::json_encode($usersmsCtrl->updateAction(R::get("id")));
                break;
        case 'usersms._show':
                $usersmsCtrl->detailView(R::get("id"));
                break;
        case 'usersms._delete':
                g::json_encode($usersmsCtrl->deleteAction(R::get("id")));
                break;
        case 'usersms._deletegroup':
                g::json_encode($usersmsCtrl->deletegroupAction(R::get("ids")));
                break;
        case 'usersms.datatable':
                g::json_encode($usersmsCtrl->datatable(R::get('next'), R::get('per_page')));
                break;

	
        default:
            g::json_encode(['success' => false, 'error' => ['message' => "404 : action note found", 'route' => R::get('path')]]);
            break;
     }

