@extends('template.tmpitcg')

@section('title', __('link.home'))

@section('datacontent')




    <div class="main-contentbox">

        <!--===============================================-->
        <!--========= We offer Different Services =========-->
        <!--===============================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2 class="black-font">We offer Different Services</h2>
                    <p class="regular-font">We have the service you need, with international quality.</p>
                    <div class="spacer"></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 imghvr-push-down">
                        <div class="services-box greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <figure data-effect="pop">
                                    <img src="{{asset('public/assets/img/icons/invest-img.png')}}" alt="invest-img" />
                                </figure>
                                <h4 class="black-color">installation</h4>
                                <div class="services-info-con">
                                    <div class="services-info">
                                        <div class="services-infoBox">
                                            <div>
                                                <figure>
                                                    <img src="{{asset('public/assets/img/icons/invest-imgHover.png')}}" alt="invest-imgHover" />
                                                </figure>
                                                <h4 class="white-color">installation</h4>
                                                <p class="regular-font">Energy system: solar panel, inverter and others</p>
                                                <div class="transparent-btn btn1">
                                                    <a href="{{route('contact.'.app()->getLocale())}}">Contact</a>
                                                </div>
                                            </div>
                                            <!--services-infoBox-->
                                        </div>
                                        <!--services-info-->
                                    </div>
                                </div>
                            </div>
                            <!--services-box-->
                        </div>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 imghvr-push-down">
                        <div class="services-box greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <figure data-effect="pop">
                                    <img src="{{asset('public/assets/img/icons/funds-img.png')}}" alt="funds-img" />
                                </figure>
                                <h4 class="black-color">Web development</h4>
                                <div class="services-info-con">
                                    <div class="services-info">
                                        <div class="services-infoBox">
                                            <div>
                                                <figure>
                                                    <img src="{{asset('public/assets/img/icons/funds-imgHover.png')}}" alt="funds-imgHover" />
                                                </figure>
                                                <h4 class="white-color">Web development</h4>
                                                <p class="regular-font">Computer system development such as: platform, website etc.</p>
                                                <div class="transparent-btn btn1">
                                                    <a href="{{route('contact.'.app()->getLocale())}}">Contact</a>
                                                </div>
                                            </div>
                                            <!--services-infoBox-->
                                        </div>
                                        <!--services-info-->
                                    </div>
                                </div>
                            </div>
                            <!--services-box-->
                        </div>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 imghvr-push-down">
                        <div class="services-box greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <figure data-effect="pop">
                                    <img src="{{asset('public/assets/img/icons/saving-img.png')}}" alt="saving-img" />
                                </figure>
                                <h4 class="black-color">Telecommunication</h4>
                                <div class="services-info-con">
                                    <div class="services-info">
                                        <div class="services-infoBox">
                                            <div>
                                                <figure>
                                                    <img src="{{asset('public/assets/img/icons/saving-imgHover.png')}}" alt="saving-imgHover" />
                                                </figure>
                                                <h4 class="white-color">Telecommunication</h4>
                                                <p class="regular-font">Network system, server, wireless, cabling etc.</p>
                                                <div class="transparent-btn btn1">
                                                    <a href="{{route('contact.'.app()->getLocale())}}">Contact</a>
                                                </div>
                                            </div>
                                            <!--services-infoBox-->
                                        </div>
                                        <!--services-info-->
                                    </div>
                                </div>
                            </div>
                            <!--services-box-->
                        </div>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 imghvr-push-down">
                        <div class="services-box greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <figure data-effect="pop">
                                    <img src="{{asset('public/assets/img/icons/retirement-img.png')}}" alt="retirement-img" />
                                </figure>
                                <h4 class="black-color">Security</h4>
                                <div class="services-info-con">
                                    <div class="services-info">
                                        <div class="services-infoBox">
                                            <div>
                                                <figure>
                                                    <img src="{{asset('public/assets/img/icons/retirement-imgHover.png')}}" alt="retirement-imgHover" />
                                                </figure>
                                                <h4 class="white-color">Security</h4>
                                                <p class="regular-font">Telesurveillance system, camera, alarm and others.</p>
                                                <div class="transparent-btn btn1">
                                                    <a href="{{route('contact.'.app()->getLocale())}}">Contact</a>
                                                </div>
                                            </div>
                                            <!--services-infoBox-->
                                        </div>
                                        <!--services-info-->
                                    </div>
                                </div>
                            </div>
                            <!--services-box-->
                        </div>
                        <!--col-lg-3-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>
        <!--=====================================-->
        <!--============ Who We Are =============-->
        <!--=====================================-->
        <div class="pattern col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #000000">
            <div class="container" style="background-color: #000000">
                <div class="row">
                    <div class="who-we-are pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <h2>Who We Are</h2>
                            <p>We are a progressive group. Evolving in several fields such as IT. We are here to offer you quality and standard services.</p>
                            <p>Contact Us today. </p>
                            <div class="transparent-btn pull-left">
                                <a href="{{route('contact.'.app()->getLocale())}}">Join Now</a>
                            </div>
                        </div>
                        <!--who-we-are-->
                    </div>
                    <!--row-->
                </div>

                <div class="who-we-are-img">
                    <img src="{{asset('public/assets/img/logo/who-we-are-img.png')}}" alt="who-we-are-img" />
                </div>

                <!--container-->
            </div>

            <!--pattern-->
        </div>
        <!--====================================-->
        <!--========= Business Meeting =========-->
        <!--====================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="logo-background">
                            <figure class="business-meeting-img">
                                <img src="{{asset('public/assets/img/logo/business-meeting.png')}}" alt="business-meeting" />
                            </figure>
                            <!--logo-background-->
                        </div>
                        <!--text-center-->
                    </div>
                    <div class="business-box col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="light-blue-color">Bringing new look to your business!</h1>
                        <h2 class="black-font">WE Helping small business</h2>
                        <p>We have packages for successful businesses. Go ahead and make you known everywhere. Find your needs among our services. </p>
                        <p class="blue-color regular-font">Trust us. We are the ideal partner to help you grow well and quickly. Join us now for services such as:</p>
                        <ul>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Web development. </li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Equipments. </li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Security. </li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Guidance. </li>
                        </ul>
                        <div class="transparent-btn pull-left">
                            <a href="{{route('contact.'.app()->getLocale())}}">Contact Us</a>
                        </div>
                        <!--business-box-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>
        <!--main-contentbox-->
    </div>




    <!--=====================================-->
    <!--========= Bringing new look =========-->
    <!--=====================================-->
    <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                <div class="row">
                    <figure>
                        <img alt="business-quality" src="{{asset('public/assets/img/logo/business-quality.jpg')}}">
                    </figure>
                    <h3 class="caption-heading">quality</h3>
                    <div class="caption">
                        <div class="caption-text">
                            <h3>quality</h3>
                            <p class="regular-font">We provide quality services, of an international standard. Our work is carried out with perfect measurements.</p>
                            <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                            <!-- caption-text-->
                        </div>
                        <!--caption-->
                    </div>
                    <!--row-->
                </div>
                <!--business-imagebox-->
            </aside>
            <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                <div class="row">
                    <figure>
                        <img alt="commitment" src="{{asset('public/assets/img/logo/commitment.jpg')}}">
                    </figure>
                    <h3 class="caption-heading">commitment</h3>
                    <div class="caption">
                        <div class="caption-text">
                            <h3>commitment</h3>
                            <p class="regular-font">We take your projects to heart. We respect our commitments and work quickly. You can count on us.</p>
                            <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                            <!-- caption-text-->
                        </div>
                        <!-- caption-->
                    </div>
                    <!--row-->
                </div>
                <!--business-imagebox-->
            </aside>
            <aside class="business-imagebox col-lg-4 col-md-4 col-sm-7 col-xs-12 ">
                <div class="row">
                    <figure>
                        <img alt="business-success" src="{{asset('public/assets/img/logo/business-success.jpg')}}">
                    </figure>
                    <h3 class="caption-heading">swiftness</h3>
                    <div class="caption">
                        <div class="caption-text">
                            <h3>swiftness</h3>
                            <p class="regular-font">Quick result? it's us. Our services are offered within short periods, to save you time.</p>
                            <!-- // <div class="transparent-btn"><a href="#">Read More</a></div> //-->
                            <!--caption-text-->
                        </div>
                        <!--caption-->
                    </div>
                    <!--row-->
                </div>
                <!--business-imagebox-->
            </aside>
            <!--row-->
        </div>
        <!--text-center-->
    </div>




    <!--=====================================-->
    <!--============= Skill Level ===========-->
    <!--=====================================-->
    <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="numeric logo-background stat-count pull-left bold-font">8</div>
                        <h4 class="black-color pull-left"><span>Years of <br>
                            Experiences</span></h4>
                        <!--skill-level-->
                    </aside>
                    <!--col-lg-3-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="numeric stat-count logo-background pull-left bold-font">90</div>
                        <h4 class="black-color pull-left"><span>Happy<br>
                            Customers</span></h4>
                        <!--skill-level-->
                    </aside>
                    <!--col-lg-3-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="numeric stat-count logo-background pull-left bold-font">9</div>
                        <h4 class="black-color pull-left"><span>customers<br>
                            every years</span></h4>
                        <!--skill-level-->
                    </aside>
                    <!--col-lg-3-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <aside class="skill-level col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="numeric stat-count logo-background pull-left bold-font">12</div>
                        <h4 class="black-color pull-left"><span>affiliate<br>
                            Partnership</span></h4>
                        <!--skill-level-->
                    </aside>
                    <!--col-lg-3-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--paddingBox-->
    </div>
    <!--main-contentbox-->
    </div>






    <!--=====================================-->
    <!--============== Partners =============-->
    <!--=====================================-->
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <aside class="paddingBox border-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="partner-heading col-lg-2 col-md-2 col-sm-12 col-xs-12">Our
                        <br>
                        <span class="light-font">Business</span>
                        <br>
                        Partners
                        <!--partner-heading-->
                    </div>
                    <div class="partners col-lg-10 col-md-12 col-sm-12 col-xs-12">

                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo1.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>


                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo2.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>


                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo3.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>


                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo4.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>
                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo5.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>

                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo6.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>

                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo7.png')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>
                        <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="partner-logos col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span> <a href="#">
                                        <img src="{{asset('public/assets/img/partners/partner-logo8.jpg')}}" alt="" />
                                    </a> </span>
                                <!--partner-logos-->
                            </div>
                            <!--col-lg-3-->
                        </aside>
                        <!--partners-->
                    </div>
                    <!--paddingBox-->
                </aside>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--col-lg-12-->
    </div>
    <!--main-contentbox-->
    </div>

@endsection