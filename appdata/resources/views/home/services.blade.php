@extends('template.tmpitcg')

@section('title', 'services')


@section('bannerpage')

@show


@section('datacontent')



    <div class="main-contentbox">




        <!--=====================================-->
        <!--============== Banner ===============-->
        <!--=====================================-->
        <div class="sub-banner-con darkBlueBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="sub-banner-text darkBlueBg regular-font col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div>
                                <h1>services</h1>
                                <p>We offer quality service, tailored to your needs. Join us.</p>
                            </div>
                            <!--sub-banner-text-->
                        </div>
                        <!--row-->
                    </div>
                    <!--container-->
                </div>
                <div class="sub-banner-img subbannerabout col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{asset('public/assets/img/banners/about-banner.jpg')}}">
                </div>
                <!--row-->
            </div>
            <!--col-lg-12-->
        </div>


        <!--================================================-->
        <!--============== We offer Services ===============-->
        <!--================================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2 class="black-font">We offer Different Services</h2>
                    <p class="regular-font">We have a wide range of quality services at the best price </p>
                    <div class="spacer"></div>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img1.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/invest-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Installation</h4>
                            <p>For your installation needs: inverter, solar panel, wireless printing, cash register, network etc.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img2.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/funds-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Web development</h4>
                            <p>We offer tailor-made developments such as: website, online platform, application etc.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img3.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/headset-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Support</h4>
                            <p>We are available to support you in all your IT concerns. Contact our teams 6 days a week.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img4.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/cast-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Telecommunication</h4>
                            <p>This is our specialty. Networks, server, internet etc we are here to serve you. Make us your supplier.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <div class="spacer"></div>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img5.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/storage-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Data management</h4>
                            <p>We process and secure your data in the cloud.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img6.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/retirement-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Security</h4>
                            <p>We have all kinds of security cameras. Infrared etc. Control everything with your smartphone.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img3.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/do-not-disturb-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Saving & Investments</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incidid unt ut labore.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <figure>
                            <img src="{{asset('public/assets/img/services/services-img4.jpg')}}" alt="" />
                        </figure>
                        <div class="service-innerbox greyBg">
                            <div class="icon-holder BlueBg" data-effect="helix">
                                <span><img src="{{asset('public/assets/img/icons/do-not-disturb-img2.png')}}" alt="invest-img2" /></span>
                            </div>
                            <h4>Retirements</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incidid unt ut labore.</p>
                            <!--service-innerbox-->
                        </div>
                        <!--services-plans-->
                    </aside>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
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

@endsection