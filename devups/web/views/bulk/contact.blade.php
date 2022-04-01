@extends('layout.test')

@section('container')

<!--inner Title Start -->
<div class="sms_title_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sms_inner_title_heading full_width">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="{{route('hello')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>Contact Us</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->

    <!-- contact Wrapper start -->
    <div class="contact_wrapper full_width">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="sms_contact_box_wrapper full_width">
                        <i class="flaticon-support"></i>
                        <div class="sms_contact_info_box">
                            <h1>contact support</h1>
                            <p>+145-4886897</p>
                            <a href="#">support@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="sms_contact_box_wrapper full_width">
                        <i class="flaticon-contact-book"></i>
                        <div class="sms_contact_info_box">
                            <h1>contact sales</h1>
                            <p>+145-4886897</p>
                            <a href="#">sales@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact Wrapper end -->
    <!-- contact form Wrapper start -->
    <div class="contact_form_wrapper full_width">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="sms_contact_form_box full_width">
                        <form>

                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label>Name </label>
                                    <input type="text" class="form-control require" name="full_name" id="namTen-first" placeholder=" Name*">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                            </div>

                            <div class="form-e">
                                <div class="form-group i-email">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control require" name="email" id="emailTen" placeholder=" Email Address*" data-valid="email" data-error="Email should be valid.">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>

                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label>phone number </label>
                                    <input type="text" class="form-control require" name="contact_no" id="phone_number" placeholder="Phone Number*">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label>type of query </label>
                                    <select name="country" class="require">
                                        <option value="0">sales</option>
                                        <option value="1">retail</option>
                                        <option value="2">marketing</option>

                                    </select>

                                </div>
                            </div>
                            <div class="form-pos">
                                <div class="form-group i-name">
                                    <label>Are You an Existing Customer?</label>
                                    <select name="customer" class="require">
                                        <option value="3">yes</option>
                                        <option value="4">no</option>

                                    </select>

                                </div>
                            </div>
                            <div class="form-m">
                                <div class="form-group i-message">
                                    <label>how can we help? </label>
                                    <textarea class="form-control require" name="message" rows="5" id="messageTen" placeholder="How Can We Help?"></textarea>
                                    <i class="fas fa-comment"></i>
                                </div>
                            </div>
                            <div class="captch_box">
                                <div class="captchaWrapper">
                                    <button type="button" class="captchaBox boxHover"></button>
                                </div>
                                <input type="checkbox" name="hiddenCaptcha" id="hiddenCaptcha" disabled="disabled" />
                                <label for="hiddenCaptcha" class="captchaLabel">I'm not a robot </label> <img src="images/caps.png" alt="img">
                            </div>

                            <div class="contact_btn full_width">
                                <div class="response"></div>
                                <div class="js_btn_wrapper full_width">
                                    <input type="hidden" name="form_type" value="contact" />
                                    <button type="button" class="submitForm">submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="visiting_Wrapper full_width">
                        <div class="sms_heading_wrapper">
                            <h4>Visit Our Headquarters</h4>
                            <h3>Street Name 50, Building 85,
12345 SoHo, New York</h3>
                        </div>
                        <ul class="visitors_contact full_width">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>123 City Avenue, Floor 10,
                                    <br> malbourne, Australia.
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>1 -234 -456 -7890
                                    <br> 1 -234 -456 -7890</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="#">sms@example.com </a>
                                <br>
                                <a href="#">support@example.com</a>
                            </li>

                        </ul>

                        <div id='map'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14694.89654676977!2d76.03231791896204!3d22.960384559751162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396317831918697f%3A0x54768b0995b49de6!2sRam%20Nagar%2C%20Dewas%2C%20Madhya%20Pradesh%20455001!5e0!3m2!1sen!2sin!4v1601975153656!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form Wrapper end -->

@endsection