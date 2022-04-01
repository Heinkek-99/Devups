@extends('layout.test')

@section('container')

<!--inner Title Start -->
<div class="sms_title_main_wrapper">

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sms_inner_title_heading full_width">
                <h2>Pricing Table</h2>

                <ul>
                    <li><a href="{{route('hello')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                    <li>Pricing Table</li>
                </ul>

            </div>

        </div>
    </div>
</div>
</div>
<!-- inner Title End -->
<!-- pricing amount wrapper start-->
<div class="promotion_wrapper pricing_amount_wrapper full_width">

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="promotional_banner full_width">
                <h1>Making your communication go
vroooom in 90+ countries.</h1>
                <p>Start with free credits and get volume discount as it grows</p>
                <div class="see_more_btn promotion_btn full_width">
                    <ul>
                        <li>
                            <a href="{{route('pricing')}}"> buy now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="pricing_calculator custom-pricing-section full_width">
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                        <div class="dropdown banner-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <input class='' id='currency2' type=hidden><span class='currencytext2'><span> <img src="{{__front}}images/flag2.png" alt="img"></span>India</span><i class="caret"></i></a>
                            <ul class="currencys2 dropdown-menu">
                                <li><span> <img src="{{__front}}images/flag.png" alt="img"></span>Japan</li>
                                <li><span> <img src="{{__front}}images/flag2.png" alt="img"></span>Jordan</li>
                                <li><span> <img src="{{__front}}images/flag3.png" alt="img"></span>Kenya</li>
                                <li><span> <img src="{{__front}}images/flag.png" alt="img"></span>Macao</li>
                                <li><span> <img src="{{__front}}images/flag2.png" alt="img"></span>Turkey</li>
                                <li><span> <img src="{{__front}}images/flag3.png" alt="img"></span>Nepal</li>
                                <li><span> <img src="{{__front}}images/flag.png" alt="img"></span>Niger</li>
                                <li><span> <img src="{{__front}}images/flag2.png" alt="img"></span>Oman</li>
                                <li><span> <img src="{{__front}}images/flag3.png" alt="img"></span>Spain</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-7 drppricing col-xs-6">
                        <div class="dropdown banner-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <input class='inputid' id='type' type="hidden"><span class='typetext'>Transactional SMS</span><i class="caret"></i></a>
                            <ul class="types dropdown-menu">
                                <li id="trans">Transactional SMS</li>
                                <li id="sendotp">Send OTP</li>
                                <li id="promo">Promotional SMS</li>

                            </ul>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-sm-5 col-xs-5">
                        <div class="volume">
                            <label>Number of SMS</label>
                            <input maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="5000" id='noOfSMS' class="inputid form-control" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 drppricing col-xs-6">
                        <div id="main-smscount">
                            <div class="smscount">
                                <div> <span class="rcost cost">0.2/</span> <span class="sms">SMS</span></div>
                                <div class="dropdown banner-dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <input class='inputid' id='currency' type=hidden><span class='currencytext'>INR</span><i class="caret"></i></a>
                                    <ul class="currencys dropdown-menu">
                                        <li>USD</li>
                                        <li>AED</li>
                                        <li>INR</li>
                                        <li>AUD</li>
                                        <li>NZD</li>
                                        <li>EUR</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-tax" style="display: block">
                                <small class="clearfix text-left">*18% GST Extra (India Only)</small> <small class="clearfix text-left">*Min. Purchase: 2500 Credits</small></div>
                        </div>
                        <div id="get-custom-quote"> <a href="#" data-toggle="modal" data-target="#talkToSales_dialog">Get custom quote</a></div>
                    </div>

                    <div class="clearfix col-sm-5 col-xs-5">
                        <div id="TotalCost" class="amount">
                            <label>Total Amount</label> <span class="tcost cost small">0</span></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
</div>
<!-- pricing amount wrapper end-->
<!-- sms pricing wrapper start -->
<div class="sms_pricing_table_wrapper full_width background_color">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="sms_heading_wrapper">
                <h4>our pricing table</h4>
                <h3>Simple, Flexible Bulk SMS Pricing</h3>
            </div>
        </div>
        <div class="col-12 pricing_overflow_wrap">
            <div class="pricing_select_box full_width">
                <ul>
                    <li>SMS Bundle</li>
                    <li>Per Bundle</li>
                    <li>Per SMS</li>
                </ul>

                <div class="pricing_box1  full_width">
                    <label class="pricing_radio">
                        <span class="pbox1">2,000 Messages</span><span class="pbox2">$1,250 </span><span class="pbox3">$0.25</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">5,000 Messages</span><span class="pbox2">$2,500    </span><span class="pbox3">$0.25</span>
                        <input type="radio" name="radio" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">10,000 Messages</span><span class="pbox2">$9,500</span><span class="pbox3">$0.25</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">25,000 Messages</span><span class="pbox2">$9,500</span><span class="pbox3">$0.19</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">50,000 Messages</span><span class="pbox2">$40,000</span><span class="pbox3">$0.17</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">1,00,000 Messages</span><span class="pbox2">$75,000</span><span class="pbox3">$0.16</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="pricing_box1  full_width">
                    <label class="pricing_radio"><span class="pbox1">10,00,000 Messages</span><span class="pbox2">$1,45,000 </span><span class="pbox3">$0.26</span>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>

            </div>
            <div class="see_more_btn  full_width">
                <ul>
                    <li>
                        <a href="{{route('pricing')}}"> buy now</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- sms pricing wrapper end -->
<!-- pay fees wrapper start-->
<div class="pay_fees_Wrapper full_width">

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="class_delivery_wrapper full_width">
                <h1>Pay As You Go. No Hidden Setup Fees. Forever Free <br>
To Use Platform.</h1>

                <ul>
                    <li>
                        <a href="#"> <i class="flaticon-tick-box"></i> Lifetime validity for SMS credits
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="flaticon-tick-box"></i> Credits can be used for both Promotional & Transactional SMS
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="flaticon-tick-box"></i> Free access to web portal & SMS APIs </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="feature_wrapper full_width">
                <h1>Just pay for SMS. Get access to 50+ free features right <br>
out of the box including:</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                    <div class="pay_fees_links full_width">

                        <ul>

                            <li> <a href="#"><i class="flaticon-circular-shape-silhouette"></i>Send Files via SMS

</a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Send in 20+ Languages

                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Comprehensive APIs

                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Surveys & Forms

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                    <div class="pay_fees_links full_width">

                        <ul>

                            <li> <a href="#"><i class="flaticon-circular-shape-silhouette"></i>Personalize Bulk Sends

</a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Real-time Reports

                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Manage Inbound SMS

                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Excel to SMS Plugin

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                    <div class="pay_fees_links full_width">

                        <ul>

                            <li> <a href="#"><i class="flaticon-circular-shape-silhouette"></i>URL Shortener

</a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Custom Sender IDs

                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Opt-out/Opt-in Path

                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Android/iOS App

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- delivery wrapper end-->
<!-- payment wrapper start-->
<div class="available_payment_wrapper full_width">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="comapnay_content_wrapper full_width">
                <h1>Available payment methods :</h1>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="payment_slider full_width">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay1.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay2.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay3.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay4.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay5.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="company_img_wrapper">
                            <a href="#"><img src="{{__front}}images/pay6.png" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- payment wrapper end-->

@endsection