@extends('layout.test')
<?php
$action = 'index.php?path=connexion';
?>
@section('container')


<!--inner Title Start -->
<div class="sms_title_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sms_inner_title_heading full_width">
                        <h2>Sign In / Sign Up</h2>
                        <ul>
                            <li><a href="{{route('hello')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>Sign In</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- login register Wrapper start -->
    <div class="login_wrapper_top full_width">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="login_img_wrapper full_width"> <img src="{{__front}}images/login.png" alt="img" class="img-responsive"> </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                                        
                    <form role="form" method="post" action="<?= $action; ?>">

                        <div class="login_tab_top_wrap full_width">
                            <div class="tab-content full_width">

                                <div class="tab-pane active">
                                    <div class="row">
                                        <div class="login_wrapper full_width">
                                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                                <div class="formsix-pos">
                                                    <div class="form-group i-email">
                                                        <label>email address</label>
                                                        <input type="text" class="form-control" required="" placeholder="Email Address*"> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                                <div class="formsix-e">
                                                    <div class="form-group pd_otp_wrapper float_left">
                                                        <label>password</label>
                                                        <input id="password-field" class="form-control" type="password" placeholder="Enter Password"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                                <div class="login_remember_box">
                                                    <label class="control control--checkbox">Remember me
                                                        <input type="checkbox"> <span class="control__indicator"></span> </label> <a href="#" class="forget_password">
                                        Forgot Password
                                    </a> </div>
                                                <div class="see_more_btn signin_btn full_width" type="submit">
                                                    <button type="submit" class="btn btn-lg btn-success btn-block">
                                                        Submit
                                                    </button>
                                                </div>
                                                <p class="account_setting full_width">Don’t have an account? <a href="{{route('sign')}}">Sign Up now! </a></p>
                                                <h5 class="login_or_text">or</h5> </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6 col-sm-6">
                                                    <div class="google_wrap full_width">
                                                        <a href="https://in.pinterest.com/"> <i class="fab fa-pinterest-p"></i> Pinterest </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-6 col-sm-6">
                                                    <div class="facebook_wrap full_width">
                                                        <a href="https://www.facebook.com/lite/"> <i class="fab fa-facebook-f"></i> facebook</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                            
                </form>
            </div>
        </div>
    </div>
                    
                  
                    
    <!-- login register Wrapper end -->

@endsection