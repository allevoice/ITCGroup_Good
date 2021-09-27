@extends('template.tmpitcg')

@section('title', 'About')

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
                                <h1>about us</h1>
                                <p>We are 100% dedicated to customer satisfaction and relationship built on trust</p>
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








        <!--=====================================-->
        <!--========= Bringing new look =========-->
        <!--=====================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="logo-background company-graph">
                            <figure><img src="{{asset('public/assets/img/logo/company-graph.png')}}" alt="company-graph"/></figure>
                            <!--logo-background-->
                        </div>
                        <!--text-center-->
                    </div>
                    <div class="business-box no-margin-top col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2 class="black-font">our company</h2>
                        <p>ITC Group is an IT consulting firm founded in 2008. Since then, its client list has expanded to include a large number of private companies, as well as NGOs and public organizations. We have created a highly effective center of skills and expertise covering various domains in the technology world. Our staff members have the capabilities and resources to deal with very specific issues and highly specialized cases.</p>
                        <p class="blue-color regular-font">Our mission is to empower our customers so they can realize their IT projects. A multidisciplinary team of consultants enables clients to benefit from a holistic approach to IT project management. From strategy to operational application and follow-ups, our clients experience a really close relationship and personalized support to ensure the success of their companies and their IT projects.</p>
                        <ul>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Computer network implementation and maintenance;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Security and surveillance Systems for offices and vehicles;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Translation and video conference systems;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Satellite television systems setup;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Solar Energy system implementation;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Database setup and management;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Websites and software programing;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;">Seminars on integrated management software packages;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;"> Translation & Interpration Services;</li>
                            <li style="background: url({{asset('public/assets/img/icons/li-icon.png')}}) no-repeat left 7px;"> Technical support services; And many others…</li>
                        </ul>
                        <!--business-box-->
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
        <div class="pattern col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#000000;">
            <div class="container">
                <div class="row">
                    <div class="who-we-are pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <h2>ABOUT THE FOUNDER</h2>
                            <p>Jean Samuel Jules (CEO)</p>
                            <div class="transparent-btn pull-left">
                                <a href="{{route('blog.'.app()->getLocale())}}">More</a></div>
                        </div>
                        <!--who-we-are-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <div class="who-we-are-img"><img src="{{asset('public/assets/img/logo/who-we-are-img.png')}}" alt="who-we-are-img" /></div>
            <!--pattern-->
        </div>
        <!--=====================================-->
        <!--========= Meet our Advisors =========-->
        <!--=====================================-->
        <div class="greyBg paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2>Meet Our Advisors</h2>
                    <p class="regular-font">Our team is made up of people passionate about technology and business management. Indeed, a wide range of skills and expertise is needed to provide the best solution to our clients in all areas of Information Technology and consulting.</p>
                    <div class="spacer"></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <aside class="advisor-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <figure class="advisor-img1"><img alt="advisor-img1" src="{{asset('public/assets/img/services/advisor-img1.png')}}"></figure>
                            <div class="advisor-info text-right">
                                <h3>Jean<br>Samuel<br>Jules<span><hr>Chief Advisor<br>CEO</span></h3>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://web.facebook.com/jsjulessam/" class="fa fa-facebook"></a></li>
                                    <li><a href="https://twitter.com/jsjulessam" class="fa fa-twitter"></a></li>
                                </ul>
                                <!--social-icons-->
                            </div>
                            <!--advisor-box-->
                        </aside>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <aside class="advisor-box col-lg-12 col-md-12 col-sm-12 col-xs-12 active">
                            <figure class="advisor-img2"><img alt="advisor-img2" src="{{asset('public/assets/img/services/advisor-img1.png')}}"></figure>
                            <div class="advisor-info text-right">
                                <h3>Valerie<span><hr>Chief Advisor</span></h3>
                                <!--
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                advisor-info-->
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <!--// <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                </ul>
                                <!--social-icons-->
                            </div>
                            <!--advisor-box-->
                        </aside>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <aside class="advisor-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <figure class="advisor-img3"><img alt="advisor-img3" src="{{asset('public/assets/img/services/advisor-img1.png')}}"></figure>
                            <div class="advisor-info text-right">
                                <h3>Cassy <span><hr>Chief Advisor</span></h3>
                                <!--
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                advisor-info-->
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <!-- //<li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                </ul>
                                <!--social-icons-->
                            </div>
                            <!--advisor-box-->
                        </aside>
                        <!--col-lg-3-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <aside class="advisor-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <figure class="advisor-img4"><img alt="advisor-img4" src="{{asset('public/assets/img/services/advisor-img1.png')}}"></figure>
                            <div class="advisor-info text-right">
                                <h3>NewOne <span><hr>Chief Advisor</span></h3>
                                <!--
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                advisor-info-->
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>

                                </ul>
                                <!--social-icons-->
                            </div>
                            <!--advisor-box-->
                        </aside>
                        <!--col-lg-3-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--greyBg-->
        </div>



@endsection