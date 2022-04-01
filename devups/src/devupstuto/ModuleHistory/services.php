<?php
            //ModuleHistory
		
        require '../../../admin/header.php';
        
// verification token
//

        use Genesis as g;
        use Request as R;
        
        header("Access-Control-Allow-Origin: *");
                

		$historyCtrl = new HistoryController();
		
     (new Request('hello'));

     switch (R::get('path')) {
                
        case 'history._new':
                g::json_encode($historyCtrl->formView());
                break;
        case 'history.create':
                g::json_encode($historyCtrl->createAction());
                break;
        case 'history._edit':
                g::json_encode($historyCtrl->formView(R::get("id")));
                break;
        case 'history.update':
                g::json_encode($historyCtrl->updateAction(R::get("id")));
                break;
        case 'history._show':
                $historyCtrl->detailView(R::get("id"));
                break;
        case 'history._delete':
                g::json_encode($historyCtrl->deleteAction(R::get("id")));
                break;
        case 'history._deletegroup':
                g::json_encode($historyCtrl->deletegroupAction(R::get("ids")));
                break;
        case 'history.datatable':
                g::json_encode($historyCtrl->datatable(R::get('next'), R::get('per_page')));
                break;

	
        default:
            g::json_encode(['success' => false, 'error' => ['message' => "404 : action note found", 'route' => R::get('path')]]);
            break;
     }

