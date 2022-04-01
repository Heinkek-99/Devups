@extends('layout.test')

@section('container')

<!--inner Title Start -->
<div class="sms_title_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sms_inner_title_heading full_width">
                        <h2>Frequently Asked Questions</h2>
                        <ul>
                            <li><a href="{{route('hello')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>FAQ</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    
    <!-- tabOne section start -->
    <div class="tabOne ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-12 col-sm-12 mb-3">
                    <ul class="nav nav-pills flex-column tab-btn" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-home-tab" data-toggle="tab" href="#home-tabone" role="tab" aria-selected="true">General Questions</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-profile-tab" data-toggle="tab" href="#profile-tabone" role="tab" aria-selected="false">send bulk SMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-contact-tab" data-toggle="tab" href="#contact-tabone" role="tab" aria-selected="false">prices and purchasing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ragulation-tab" data-toggle="tab" href="#ragulation-tabone" role="tab" aria-selected="false">TRAI Regulations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="attachment-tab" data-toggle="tab" href="#attachment-tabone" role="tab" aria-selected="false">SMS Attachments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="web-page-tab" data-toggle="tab" href="#webpage-tabone" role="tab" aria-selected="false">Mobile Web Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Opt-outs-tab" data-toggle="tab" href="#opt-outs-tabone" role="tab" aria-selected="false">Opt-ins & Opt-outs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="integration-tab" data-toggle="tab" href="#integration-tabone" role="tab" aria-selected="false">SMS API Integration</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-2 -->
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                    <div class="tab-content  tab-pera" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tabone" role="tabpanel" aria-labelledby="one-home-tab">
                            <h5 class="main_top_heading">GENERAL QUESTION</h5>
                            <div class="accordion" id="accordion1" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseone" role="button" aria-expanded="false" aria-controls="collapseone">
                                                How does bulk SMS messaging work?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapseone" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion1" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion23" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading23">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse23" role="button" aria-expanded="false" aria-controls="collapse23">
                                            Does Bullsms Support accented and foreigen language charecter?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse23" class="collapse" role="tabpanel" aria-labelledby="heading23" data-parent="#accordion23" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes, you can send SMS messages using Unicode for non-English characters (such as Arabic, Chinese or Cyrillic characters)..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion10" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading10">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse10" role="button" aria-expanded="false" aria-controls="collapse10">
                                                can customer replay to my SMS masseges ?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10" data-parent="#accordion10" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes, each message that is sent out using BulkSMS can be replied to. Each sent message is allocated a unique identifying number. Should your customers wish to respond to the SMS you sent, this unique number will ensure that the customer's response is routed directly to your BulkSMS Inbox.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion11" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading11">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse11" role="button" aria-expanded="false" aria-controls="collapse11">

                                                    How quickly are messages delivered? 

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordion11" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion50" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading50">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse50" role="button" aria-expanded="false" aria-controls="collapse50">
                                            Does Bullsms Support accented and foreigen language charecter?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse50" class="collapse" role="tabpanel" aria-labelledby="heading50" data-parent="#accordion50" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes, you can send SMS messages using Unicode for non-English characters (such as Arabic, Chinese or Cyrillic characters)..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion51" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading51">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse51" role="button" aria-expanded="false" aria-controls="collapse51">
                                            sendding SMS masseges 
                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse51" class="collapse" role="tabpanel" aria-labelledby="heading51" data-parent="#accordion51" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes, you can send SMS messages using Unicode for non-English characters (such as Arabic, Chinese or Cyrillic characters)..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion" id="accordion52" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading52">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse52" role="button" aria-expanded="false" aria-controls="collapse52">
                                            How much does bulk SMS cost?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse52" class="collapse" role="tabpanel" aria-labelledby="heading52" data-parent="#accordion52" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes, you can send SMS messages using Unicode for non-English characters (such as Arabic, Chinese or Cyrillic characters)..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile-tabone" role="tabpanel" aria-labelledby="one-profile-tab">
                            <h5 class="main_top_heading">SEND BULL SMS </h5>
                            <div class="accordion2" id="accordion2" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading3">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                                                How much does bulk SMS cost?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordion2" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="accordion2" id="accordion12" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading12">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse12" role="button" aria-expanded="false" aria-controls="collapse12">
                                                sendding SMS masseges 

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordion12" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>SMS messages sent via our SMS gateway are typically delivered to a mobile phone number within 15 seconds..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tabone" role="tabpanel" aria-labelledby="one-contact-tab">
                            <h5 class="main_top_heading">PRICING AND PURCHASING</h5>
                            <div class="accordion3" id="accordion3" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading13">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse13" role="button" aria-expanded="false" aria-controls="collapse13">
                                          How many sites can I use my themes on?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordion3" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion3" id="accordion14" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading14">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse14" role="button" aria-expanded="false" aria-controls="collapse14">
                                          How  do I buy SMS creadit ? 

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordion14" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>BulkSMS works on a prepaid basis. You can purchase credits online via Credit or Debit card, PayPal, Moneybookers or electronic funds transfer. Should you wish to pay via electronic funds transfer, our bank details will be available when you are logged in to your BulkSMS account and select Bank transfer..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="ragulation-tabone" role="tabpanel" aria-labelledby="ragulation-tab">
                            <h5 class="main_top_heading">TRAI REGULATIONS </h5>
                            <div class="accordion4" id="accordion4" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading7">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                                                Is there any auto-renew subscription?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordion4" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion4" id="accordion15" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading15">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse15" role="button" aria-expanded="false" aria-controls="collapse15">
                                            What do different delivery statuses mean?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15" data-parent="#accordion15" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>The delivery status of text messages can be always monitored in our Website and using API.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion4" id="accordion16" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading16">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse16" role="button" aria-expanded="false" aria-controls="collapse16">
                                                What are the advantages of your SMS service?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16" data-parent="#accordion16" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>We provide methods to send SMS (messaging) one by one or in bulk. Low Per Message Cost, Zero up front cost and Fast Delivery are some of the key advantages of our SMS Service.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="attachment-tabone" role="tabpanel" aria-labelledby="attachment-tab">
                            <h5 class="main_top_heading">SMS ATTACHMENT </h5>
                            <div class="accordion5" id="accordion5" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading9">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse9" role="button" aria-expanded="false" aria-controls="collapse9">
                                                Can I test a demo account before buying BulkSMS services??

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordion5" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Absolutely Yes!! We do provide such facilities to our buyers & clients. Before buying our services we give you details of our dummy account. You can easily log into it and test about how our services will work for you. You can send text messages to few people through this demo account.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion5" id="accordion17" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading17">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse17" role="button" aria-expanded="false" aria-controls="collapse17">
                                                Is there any auto-renew subscription?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17" data-parent="#accordion17" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="webpage-tabone" role="tabpanel" aria-labelledby="web-page-tab">
                            <h5 class="main_top_heading">MOBILE WEB PAGES</h5>
                            <div class="accordion6" id="accordion6" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading19">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse19" role="button" aria-expanded="false" aria-controls="collapse19">
                                                 Is there a limit to how many numbers I can send at one time

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19" data-parent="#accordion6" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>You should try and limit the number of comma separated mobile numbers to approximately 100.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion6" id="accordion18" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading18">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse18" role="button" aria-expanded="false" aria-controls="collapse18">
                                                 What is the maximum length of an SMS message?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse18" class="collapse" role="tabpanel" aria-labelledby="heading18" data-parent="#accordion18" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Standard SMS messages may be up to 160 characters long</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="opt-outs-tabone" role="tabpanel" aria-labelledby="Opt-outs-tab">
                            <h5 class="main_top_heading">OPT-INS & OPT-OUTS </h5>
                            <div class="accordion7" id="accordion7" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading20">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse20" role="button" aria-expanded="false" aria-controls="collapse20">
                                                Can I Send SMS Messages to any network through Bulk SMS Service

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse20" class="collapse" role="tabpanel" aria-labelledby="heading20" data-parent="#accordion7" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Yes! We are one of the top most bulk sms provider in India, with the help of our solutions, it is quite easy to send group SMS in all over the India via different sms gateway networks.p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="integration-tabone" role="tabpanel" aria-labelledby="integration-tab">
                            <h5 class="main_top_heading">SMS API INTREGRATION </h5>
                            <div class="accordion8" id="accordion8" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading21">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse21" role="button" aria-expanded="false" aria-controls="collapse21">
                                                How do I send bulk SMS messages for my business?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse21" class="collapse" role="tabpanel" aria-labelledby="heading21" data-parent="#accordion8" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting this industry. Lorem Ipsum has been the industry's standard dummy text an ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="accordion8" id="accordion22" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading22">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse22" role="button" aria-expanded="false" aria-controls="collapse22">
                                                What is the refund policy of non-delivered messages?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse22" class="collapse" role="tabpanel" aria-labelledby="heading22" data-parent="#accordion22" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>If any issues caused due to SMSC or SMS pushed on any DND numbers, we will credit that much SMS in your account within 48 hours. We are not responsible for any issues caused by 3rd party.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="accordion8" id="accordion24" role="tablist">

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading24">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapse24" role="button" aria-expanded="false" aria-controls="collapse24">
                                                    What is API?

                                            </a>
                                         </h5>
                                    </div>

                                    <div id="collapse24" class="collapse" role="tabpanel" aria-labelledby="heading24" data-parent="#accordion24" >
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>The role of API is to provide an interface between different software systems. Bulk SMS API is a quickest way of delivering SMS to the intended recipient's cell phones. API is of several types including general API and specific API.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.col-md-10 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- tabOne section end -->


@endsection