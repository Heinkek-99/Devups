<?php

use Genesis as g;

/**
 * this class refer to the front pages. each method represent a page. where we can add js css and some other parameter
 * such as meta titel, title and so on
 *
 * Class App
 */
class App extends \dclass\devups\Controller\FrontController
{

    protected $layout = "layout.app";
    public static $user;

    public function __construct()
    {

        // self::$user = User::find(userapp()->getId());

        self::$jsfiles[] = CLASSJS . "devups.js";
        self::$jsfiles[] = CLASSJS . "model.js";
        self::$jsfiles[] = CLASSJS . "ddatatable.js";
        self::$jsfiles[] = CLASSJS . "dform.js";
        // self::$cssfiles[] = assets . "css/dv_style.css";
        

      
        (new Request('hello'));
        Request::Route($this, Request::get('path'));


    }

    public static function isGuest(){
        return is_null(self::$user->getId());
    }

    public static function needsession($message = "")
    {
        if (!self::$user->getId()) {
            redirect(route("login?message=" . $message));
            die;
        }

        return true;

    }

    public static function noneedsession()
    {
        if (self::$user->getId()) {
            redirect(route("home"));
            die;
        }

    }

    public function helloView(){

        Genesis::render("hello", []);
    }

    public function contactView(){

        Genesis::render("bulk.contact", []);
    }

        
    public function loginView(){

        Genesis::render("bulk.login", []);
    }

    public function signView(){

        Genesis::render("bulk.sign", []);
    }

    public function pricingView(){

        Genesis::render("bulk.pricing", []);
    }

    public function aboutView(){

        Genesis::render("bulk.about", []);
    }

    public function faqView(){

        Genesis::render("bulk.faq", []);
    }
// Dashbord and another section of navigation
    public function dashboardView(){

        Genesis::render("user.dashboard", []);
    }

    public function pricebundleView(){

        Genesis::render("user.price-bundle", []);
    }

    public function coverageView(){

        Genesis::render("user.coverage", []);
    }

    public function custumpriceView(){

        Genesis::render("user.custum-price", []);
    }

    public function phonebookView(){

        Genesis::render("user.phone-book", []);
    }

    public function allView(){

        Genesis::render("user.invoice.all", []);
    }

    public function recurringView(){

        Genesis::render("user.invoice.recuring", []);
    }
// API 
    public function infoView(){

        Genesis::render("user.sms-api.info", []);
    }
// SMS subdivisor
    public function buyunitView(){

        Genesis::render("user.sms.buy-unit", []);
    }

    public function historyView(){

        Genesis::render("user.sms.history", []);
    }

    public function campainReportsView(){

        Genesis::render("user.sms.campain-reports", []);
    }

    public function blacklistcontactsView(){

        Genesis::render("user.sms.blacklist-contacts", []);
    }

    public function importcontactsView(){

        Genesis::render("user.sms.import-contacts", []);
    }

    public function recurringsmsView(){

        Genesis::render("user.sms.recurring-sms", []);
    }

    public function sendrecurringsmsView(){

        Genesis::render("user.sms.send-recurring-sms", []);
    }

    public function sendschedulesmsView(){

        Genesis::render("user.sms.send-schedule-sms", []);
    }

    public function sendsmsView(){

        Genesis::render("user.sms.send-sms", []);
    }

    public function quicksmsView(){

        Genesis::render("user.sms.quick-sms", []);
    }

    public function senderIdManagementView(){

        Genesis::render("user.sms.sender-id-management", []);
    }
    
    public function smsTemplatesView(){

        Genesis::render("user.sms.sms-template", []);
    }

    public function transactionsView(){

        Genesis::render("user.sms.transactions", []);
    }

    public function yoView(){

        Genesis::render("yo", []);
    }
}