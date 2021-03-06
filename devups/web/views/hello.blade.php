@extends('layout.app')

@section('container')

    <!-- slider wrapper start-->
    <div class="main_slider_wrapper slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">World’s No. 1 Bulk SMS
Platform</h2>

                                        <p data-animation="animated bounceInUp">Increase sales and customer satisfaction with smarter SMS campaigns, instant OTPs, notifications, two-way interactions & other award-winning bulk SMS services</p>
                                        <div class="slider_form_wrapper slider_btn" data-animation="animated bounceInUp">
                                            <input type="text" placeholder=" Email Address...">
                                            <button type="submit"> <a href="{{route('login')}}"> sign up now</button></a> 
                                            <!-- <button type="submit"> <a href="{{ __env }}admin"> sign up now</button></a>  -->
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="{{__front}}images/slider_img.png" alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">World’s No. 1 Bulk SMS
Platform</h2>

                                        <p data-animation="animated bounceInUp">Increase sales and customer satisfaction with smarter SMS campaigns, instant OTPs, notifications, two-way interactions & other award-winning bulk SMS services</p>
                                        <div class="slider_form_wrapper slider_btn" data-animation="animated bounceInUp">
                                            <input type="text" placeholder=" Email Address...">
                                            <button type="submit"> <a href="{{ __env }}admin"> sign up now</button></a> 
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="{{__front}}images/slider_img2.png" alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">World’s No. 1 Bulk SMS
Platform</h2>

                                        <p data-animation="animated bounceInUp">Increase sales and customer satisfaction with smarter SMS campaigns, instant OTPs, notifications, two-way interactions & other award-winning bulk SMS services</p>
                                        <div class="slider_form_wrapper slider_btn" data-animation="animated bounceInUp">
                                            <input type="text" placeholder=" Email Address...">
                                            <button type="submit"> <a href="{{ __env }}admin"> sign up now</button></a> 
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_main_img_wrapper">
                                        <img src="{{__front}}images/slider_img3.png" alt="slider_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span></span> <i class="flaticon-left-arrow"></i>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span></span> <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- slider wrapper end-->
    <!-- companies wrapper start-->
    <div class="trusted_company_wrapper full_width">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="comapnay_content_wrapper full_width">
                        <h1>Trusted by 5,000+ companies</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="company_slider_wraper full_width">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="company_img_wrapper">
                                    <a href="#"><img src="{{__front}}images/cmy1.png" alt="img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="company_img_wrapper">
                                    <a href="#"><img src="{{__front}}images/cmy2.png" alt="img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="company_img_wrapper">
                                    <a href="#"><img src="{{__front}}images/cmy3.png" alt="img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="company_img_wrapper">
                                    <a href="#"><img src="{{__front}}images/cmy4.png" alt="img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="company_img_wrapper">
                                    <a href="#"><img src="{{__front}}images/cmy5.png" alt="img"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- companies wrapper end-->
    <!-- solution wrapper start -->
    <div class="sm_solution_wrapper full_width">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sms_heading_wrapper">
                        <h4>BUILD POWERFUL SOLUTIONS</h4>
                        <h3>Communication channel for all your ideas</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-paper-plane"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Easily send powerful bulk
SMS campaigns</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-settings"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">5-minute SMS API
integration</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-attached-file"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Convey more with SMS
attachments</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-responsive"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Receive SMS online
any issues</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-bar-chart"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Access real-time delivery
and click reports</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-condo"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Get enterprise ready
to easily</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-dollar"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Increase engagement with
mobile solutions</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-missed-call"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Missed call numbers &
dual VMNs</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sb_feature_box_wrapper full_width">
                        <div class="sb_feature_circle"> <i class="flaticon-whatsapp"></i>
                            <div class="btc_step_overlay"></div>
                        </div>
                        <div class="sb_feature_circle_cont full_width">
                            <h3><a href="#">Connect with your customers
via WhatsApp</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the any an printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="see_more_btn full_width">
                        <ul>
                            <li>
                                <a href="{{route('pricing')}}"> By now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- solution wrapper end -->
    <!-- download app wrapper start-->
    <div class="download_wrapper full_width">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_mockup_design full_width">

                        <img src="{{__front}}images/download.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_app_store full_width">
                        <h1>Ready to get started with your
Communication Toolkit</h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ipsa Beatae vitae dicta sunt explicabo.</p>
                        <div class="app_btn full_width">
                            <ul>
                                <li>
                                    <a href="https://www.apple.com/app-store/"><img src="{{__front}}images/apple.png" alt="img"></a>
                                </li>
                                <li>
                                    <a href="https://play.google.com/store"><img src="{{__front}}images/google.png" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download app wrapper end-->
    <!-- plugin wrapper start -->
    <div class="plugin_wrapper full_width">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sms_heading_wrapper">
                        <h4>BUILT FOR THE DEVELOPERS</h4>
                        <h3>Quick integration using plugins and libraries</h3>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg1.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>Magento</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li> <a href="#"> download </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg2.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>wooCommerce</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li><a href="#" class="GetFile">download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg3.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>shopify</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li><a href="#" class="GetFile">download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg4.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>java</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li><a href="#" class="GetFile">download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg5.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>android</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li><a href="#" class="GetFile">download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="plugin_box_wrapper full_width">
                                <img src="{{__front}}images/plg6.png" alt="img">
                                <div class="plugin_text_wrapper full_width">
                                    <h4>apple</h4>
                                </div>
                                <div class="plugin_link_wrapper full_width">
                                    <ul>
                                        <li><a href="#">docs</a></li>
                                        <li><a href="#" class="GetFile">download</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="see_more_btn show_more_btn full_width">
                                <ul>
                                    <li>
                                        <a href="api_integration.html"> show more</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- plugin wrapper end -->
    <!-- delivery wrapper start-->
    <div class="deliver_wrapper full_width">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="class_delivery_wrapper full_width">
                        <h1>Best-in-class delivery. Guaranteed.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ipsa quae abillo inventore veritatis Beatae vitae dicta explicabo.</p>
                        <ul>
                            <li>
                                <a href="#"> <i class="flaticon-tick-box"></i> Intelligent, fine-tuned SMS gateway routing technology </a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-tick-box"></i> Robust and scalable infrastructure with inbuilt redundancy </a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-tick-box"></i> Direct connectivity with multiple telecom operators </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="guarnted_wrapper full_width">
                        <i class="flaticon-shield"></i>
                        <p>Enterprise-grade security with 128-bit data encryption and strict data privacy policies.</p>
                    </div>
                    <div class="guarnted_wrapper full_width">
                        <i class="flaticon-support"></i>
                        <p>Fanatic customer support for expert help with everything from simple tips to technical integrations.</p>
                    </div>
                    <div class="guarnted_wrapper full_width">
                        <i class="flaticon-price"></i>
                        <p>Clear, honest pricing with zero hidden charges. Pay as you go with zero commitments. See bulk SMS pricing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delivery wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter-section full_width">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="fr_count_main_wrapper full_width">
                        <div class="icon">
                            <i class="flaticon-planet-earth"></i>
                        </div>
                        <div class="count-description"> <span class="timer">240</span>
                            <h5 class="con1">total countries</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="fr_count_main_wrapper full_width">
                        <div class="icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <div class="count-description"> <span class="timer">7325</span>
                            <h5 class="con1">customers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="fr_count_main_wrapper full_width">
                        <div class="icon">
                            <i class="flaticon-award"></i>
                        </div>
                        <div class="count-description"> <span class="timer">324</span>
                            <h5 class="con1">winning awards</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="fr_count_main_wrapper full_width">
                        <div class="icon">
                            <i class="flaticon-positive-vote"></i>
                        </div>
                        <div class="count-description"> <span class="timer">4275</span>
                            <h5 class="con1">positive votes</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!-- promotion wrapper start-->
    <div class="promotion_wrapper full_width">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="promotional_banner full_width">
                        <h1><i class="flaticon-flyers"></i>Promotional SMS</h1>
                        <p>Configured by default for all new accounts, promotional SMS is the generally used for sending any offers or promotions to new and a existing customers. Messages are sent to non DND numbers and of opt-in numbers (via myDND Manager) between 9 AM and 9 PM at time this slots only.</p>
                        <div class="see_more_btn promotion_btn full_width">
                            <ul>
                                <li>
                                    <a href="{{route('about')}}"> read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="promotion_img_wrapper full_width">
                        <img src="{{__front}}images/promotion.png" class="img-responsive" alt="img">
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- promotion wrapper end-->
    <!-- transaction wrapper start-->
    <div class="transaction_wrapper full_width">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="transaction_img_wrapper full_width">
                        <img src="{{__front}}images/trans.png" class="img-responsive" alt="img">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="promotional_banner full_width">
                        <h1><i class="flaticon-mail"></i>Transactional SMS</h1>
                        <p>Transactional route can only be used for sending transactional SMS such as OTPs and alerts to your registered users. Messages can be sent 24x7 from your 6-character Sender ID(s). To configure is the transactional route, create your account today and contact of this e-mail sales@text-160.com.</p>
                        <div class="see_more_btn promotion_btn full_width">
                            <ul>
                                <li>
                                    <a href="{{route('about')}}"> read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction wrapper end-->
    <!-- newsletter wrapper start-->
    <div class="newsletter_wrapper full_width">

        <div class="container">
            <div class="row">

                <div class="newsletter_content_wrapper">
                    <h1>Ready to get started
with your Communication Toolkit</h1>
                    <h5>Get in touch, or create an account.</h5>
                </div>
                <div class="newsbtn_wrapper">
                    <div class="header_btn news_btn">
                        <ul>
                            <li>

                                <a href="{{ __env }}admin"> create account </a> </li>
                            <li>
                                <a href="{{ __env }}admin"> contact sales </a> </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- newsletter wrapper end-->
    <!-- client wrapper start -->
    <div class="client_wrapper full_width">

        <div class="col-12">
            <div class="sms_heading_wrapper">
                <h4>client says</h4>
                <h3>Always there are smart People</h3>
            </div>
        </div>
        <div id="testimonial-section" class="testimonial-bg full_width">

            <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">

                <div id="section-quote">

                    <!--Left Bubble Images-->
                    <div class="container-pe-quote left">
                        <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                            <div class="img animated bounce"></div>
                        </div>
                    </div>
                    <!--Left Bubble Images-->

                    <!--Center Testimonials-->
                    <div class="container-quote carousel-on">

                        <!--Testimonial 1-->
                        <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                            <p>
                                'Managing everyday banking has finally become fun, fast and easy. Icing on the cake, customer support is super reactive: 5 stars!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Thibaut Dumontet</div>
                                <div class="job">Founder @Croquants Gourmands</div>
                            </div>
                        </div>

                        <!--Testimonial 2-->
                        <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                            <p>
                                'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is awesome! Period.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Rafaël de Lavergne</div>
                                <div class="job">Founder @Totem</div>
                            </div>
                        </div>

                        <!--Testimonial 3-->
                        <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                            <p>
                                'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now be autonomous with their payments. Qonto is game changer.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Grégoire Pasquet</div>
                                <div class="job">CEO @Worldia</div>
                            </div>
                        </div>

                        <!--Testimonial 4-->
                        <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                            <p>
                                'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles belong to the past!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Nicolas Katan</div>
                                <div class="job">Founder @Bitit</div>
                            </div>
                        </div>

                        <!--Testimonial 5-->
                        <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                            <p>
                                'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares so much. This is just incredible!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Mathieu Jouhet</div>
                                <div class="job">Freelance @Hello Mat</div>
                            </div>
                        </div>

                        <!--Testimonial 6-->
                        <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                            <p>
                                'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I think I found it.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Charles Lefebvre du Prey</div>
                                <div class="job">Founder @LiveMentor</div>
                            </div>
                        </div>

                        <!--Testimonial 7-->
                        <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                            <p>
                                'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear with, and 'hello' to a way to do finance that makes sense.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Duc Ha Duong</div>
                                <div class="job">CEO @Officience</div>
                            </div>
                        </div>

                        <!--Testimonial 8-->
                        <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                            <p>
                                'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric interface and a very reactive customer support.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Jean-Charles Samuelian</div>
                                <div class="job">CEO @Alan</div>
                            </div>
                        </div>

                        <!--Testimonial 9-->
                        <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                            <p>
                                'I have been looking for a modern and efficient banking alternative that could support the development of my business. I'm just wondering why Qonto did not exist before!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Louis Rouffineau</div>
                                <div class="job">CEO @La Company</div>
                            </div>
                        </div>

                        <!--Testimonial 10-->
                        <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                            <p>
                                'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at TheFamily? Use Qonto first.'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Oussama Ammar</div>
                                <div class="job">Founder @TheFamily</div>
                            </div>
                        </div>

                        <!--Testimonial 11-->
                        <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                            <p>
                                'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars Paris's first batch!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Bertier Luyt</div>
                                <div class="job">Managing Director @Techstars</div>
                            </div>
                        </div>
                        <!--Testimonial 12-->
                        <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                            <p>
                                'Thanks to a slick interface and simple ng has finally become fun, fast and features, managing payments and expenses has become a piece of cake!'
                            </p>
                            <div class="container-info">
                                <div class="pp"></div>
                                <div class="name">Julian Aroun</div>
                                <div class="job">Founder @Drapo</div>
                            </div>
                        </div>
                    </div>

                    <!--Right Bubble Images-->
                    <div class="container-pe-quote right">
                        <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                            <div class="img animated bounce"></div>
                        </div>

                        <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                            <div class="img animated bounce"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- client wrapper end -->

@endsection