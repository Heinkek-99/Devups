<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>{{ PROJECT_NAME }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{__front}}images/favicon.png">
        <meta name="description" content="SpaceKola, BULK SMS" />
        <meta name="keywords" content="SpaceKola, BULK SMS" />
        <meta name="author" content="Heidy KENGNE" />
        <meta name="MobileOptimized" content="320" />
        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        
        <!-- CSS only -->
            <!-- Carousel -->
            <link rel="stylesheet" href="{{__front}}css/testimonial.css">
            <link rel="stylesheet" href="{{__front}}css/owl.carousel.css">
            <link rel="stylesheet" href="{{__front}}css/owl.theme.default.css">
            <!-- Fonts -->
            <link rel="stylesheet" href="{{__front}}css/font-awesome.css">
            <link rel="stylesheet" href="{{__front}}css/fonts.css">
            <link rel="stylesheet" href="{{__front}}css/reset.css">
            <!-- Flaticon -->
            <link rel="stylesheet" href="{{__front}}css/flaticon.css">
            <link rel="stylesheet" type="text/css" href="https://webstrot.com/html/tm/text160/css/flaticon.css">
            <!-- Animation -->
            <link rel="stylesheet" href="{{__front}}css/animate.css">
            <link rel="stylesheet" href="{{__front}}css/bootstrap.min.css">
            <!-- Style CSS -->
            <link rel="stylesheet" href="{{__front}}css/style.css">
            <link rel="stylesheet" href="{{__front}}css/responsive.css">
            <script src='/google_analytics_auto.js'></script>
        
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         -->
    </head>

    <body> 
        
        <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
        <!-- Preloader start -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
        <!-- Preloader end -->

        
        <section class="fond">
            @yield('fond')
        </section>
            
        <main class="content">
            @yield('content')
        </main>

        
        <!-- footer Wrapper start -->
        <div class="footer_wrapper full_width">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                        <div class="footer_widget full_width">
                            <h4>features</h4>
                            <ul class="footer_about_link_wrapper full_width">
                                <li>
                                    <a href="#"><i class="flaticon-circular-shape-silhouette"></i>Send SMS Online </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Receive SMS Online </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>SMS Attachments </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Track SMS Campaigns </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> WhatsApp Business Solution </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Mobile Surveys and Forms </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Vouchers, Tickets</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Mobile Web Page Creator</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Missed Call Numbers </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                        <div class="footer_widget full_width">
                            <h4>integrations</h4>
                            <ul class="footer_about_link_wrapper full_width">
                                <li>
                                    <a href="#"><i class="flaticon-circular-shape-silhouette"></i>SMS APIs</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Excel to SMS Plugin </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> WordPress Plugin </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> magento extension </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_widget footer_link2 full_width">
                            <h4>text-160 for</h4>
                            <ul class="footer_about_link_wrapper full_width">
                                <li> 
                                    <a href="#"><i class="flaticon-circular-shape-silhouette"></i> Enterprises </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Resellers </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Startups </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                        <div class="footer_widget full_width">
                            <h4>use cases</h4>
                            <ul class="footer_about_link_wrapper full_width">
                                <li> 
                                    <a href="#"><i class="flaticon-circular-shape-silhouette"></i>Advertising Agencies </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Automobiles </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Banking & Financial Services </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>E-Commerce </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Education </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Event Management </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Govt. & Public Utilities </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Healthcare </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i> Health & Beauty </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                        <div class="footer_widget full_width">
                            <h4>company</h4>
                            <ul class="footer_about_link_wrapper full_width">
                                <li> 
                                    <a href="#"><i class="flaticon-circular-shape-silhouette"></i>About Us</a> 
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Reviews </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Contact Sales </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>Contact Support </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="flaticon-circular-shape-silhouette"></i>our clients </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_widget footer_link2 full_width">
                            <h4>connect with us</h4>
                            <ul class="connect_icons">
                                <li>
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom_wrapper full_width">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="btm_foter_box">
                            <p>Copyright © 2022  Bulk SMS by  H.Croft</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer wrapper end-->

        <!-- custom js start -->
        <script src="{{__front}}js/modernizr.js"></script>
        <script src="{{__front}}js/testimonial.js"></script>
        <script src="{{__front}}js/jquery-3.5.1.js"></script>
        <script src="{{__front}}js/jquery.inview.min.js"></script>
        <script src="{{__front}}js/jquery.countTo.js"></script>
        <script src="{{__front}}js/jquery.menu-aim.js"></script>
        <script src="{{__front}}js/owl.carousel.js"></script>
        <script src="{{__front}}js/google_analytics_auto.js"></script>
        <script src="{{__front}}js/custom.js"></script>
     
    </body>
</html>
