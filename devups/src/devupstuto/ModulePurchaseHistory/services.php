<?php
            //ModulePurchaseHistory
		
        require '../../../admin/header.php';
        
// verification token
//

        use Genesis as g;
        use Request as R;
        
        header("Access-Control-Allow-Origin: *");
                

		$purchasehistoryCtrl = new PurchaseHistoryController();
		
     (new Request('hello'));

     switch (R::get('path')) {
                
        case 'purchasehistory._new':
                g::json_encode($purchasehistoryCtrl->formView());
                break;
        case 'purchasehistory.create':
                g::json_encode($purchasehistoryCtrl->createAction());
                break;
        case 'purchasehistory._edit':
                g::json_encode($purchasehistoryCtrl->formView(R::get("id")));
                break;
        case 'purchasehistory.update':
                g::json_encode($purchasehistoryCtrl->updateAction(R::get("id")));
                break;
        case 'purchasehistory._show':
                $purchasehistoryCtrl->detailView(R::get("id"));
                break;
        case 'purchasehistory._delete':
                g::json_encode($purchasehistoryCtrl->deleteAction(R::get("id")));
                break;
        case 'purchasehistory._deletegroup':
                g::json_encode($purchasehistoryCtrl->deletegroupAction(R::get("ids")));
                break;
        case 'purchasehistory.datatable':
                g::json_encode($purchasehistoryCtrl->datatable(R::get('next'), R::get('per_page')));
                break;

	
        default:
            g::json_encode(['success' => false, 'error' => ['message' => "404 : action note found", 'route' => R::get('path')]]);
            break;
     }

