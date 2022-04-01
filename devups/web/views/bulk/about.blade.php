@extends('layout.test')

@section('container')
 <!--inner Title Start -->
 <div class="sms_title_main_wrapper">

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sms_inner_title_heading full_width">
                <h2>about us</h2>

                <ul>
                    <li><a href="{{route('hello')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                    <li>about us</li>
                </ul>

            </div>

        </div>
    </div>
</div>
</div>
<!-- inner Title End -->
<!-- about us wrapper start -->
<div class="about_us_wrapper full_width">

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="bulk_sms_provider full_width">
                <h1>Best Bulk SMS Service Provider
in World.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <div class="class_delivery_wrapper about_sms_link full_width">

                    <ul>
                        <li>
                            <a href="#"> <i class="flaticon-tick-box"></i> Standard dummy in text ever since the 1500s. </a>
                        </li>
                        <li>
                            <a href="#"> <i class="flaticon-tick-box"></i> Robust and scalable with inbuilt redundancy </a>
                        </li>
                        <li>
                            <a href="#"> <i class="flaticon-tick-box"></i> Direct connectivity with multiple operators </a>
                        </li>
                        <li>
                            <a href="#"> <i class="flaticon-tick-box"></i> Lorem Ipsum has been the industry</a>
                        </li>
                    </ul>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy in text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

            <div class="about_bulkimg_wrapper full_width">
                <img src="{{__front}}images/about.png" alt="img" class="img-responsive">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr Lorem Ipsum has when an unknown printer took a galley of.</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- about us wrapper end -->
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