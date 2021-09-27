@extends('template.tmpitcg')

@section('title', 'Contact')

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
                                <h1>contact us</h1>
                                <p>Contact us for any questions or suggestions</p>
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





        <!--===========================================-->
        <!--============== Get in Touch ===============-->
        <!--===========================================-->
        <div class="paddingBox col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2 class="black-font">get in touch with us</h2>
                    <p class="regular-font">Join our support team, available six (6) days </p>
                    <div class="spacer"></div>
                    <div class="border-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <aside class="contact-info">
                                    <figure class="fa fa-envelope pull-left"></figure>
                                    <div class="contact-links regular-font pull-left">
                                        <div> <a href="mailto:info@fcgroup.com">info@fcgroup.com</a><br>
                                            <a href="mailto:support@fcgroup.com">support@fcgroup.com</a> </div>
                                        <!--contact-links-->
                                    </div>
                                    <!--contact-info-->
                                </aside>
                                <!--col-lg-4-->
                            </div>
                            <aside class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <aside class="contact-info">
                                    <figure class="fa fa-phone pull-left"></figure>
                                    <div class="contact-links regular-font pull-left">
                                        <div> +509 3711.5990<br>
                                            +509 3399.5990 </div>
                                        <!--contact-links-->
                                    </div>
                                    <!--contact-info-->
                                </aside>
                                <!--col-lg-4-->
                            </aside>
                            <aside class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <aside class="contact-info">
                                    <figure class="fa  fa-map-marker pull-left"></figure>
                                    <div class="contact-links regular-font pull-left">
                                        <div>
                                            <p>17, Plaza 41, rue Lamarre,<br>
                                                Pétion-Ville, Port-au-Prince</p>
                                        </div>
                                        <!--contact-links-->
                                    </div>
                                    <!--contact-info-->
                                </aside>
                                <!--col-lg-4-->
                            </aside>
                            <!--row-->
                        </div>
                        <!--col-lg-12-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>

        <!--==============================================-->
        <!--============== Leave a Comment ===============-->
        <!--==============================================-->
        <div class="paddingBox greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row text-center">
                    <h2 class="black-font">leave a comment</h2>
                    <p class="regular-font">Leave comments or questions about the services that interest you.</p>
                    <div class="spacer"></div>
                    <div class="contact-form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="form_result"></div>
                        <div class="clear"></div>

                        <form method="post" id="contactpage">
                            <input type="hidden" name="to" value="mubashar@akdesigner.com"/>

                            <ul>
                                <li>
                                    <input name="name" id="name" type="text" placeholder="Your name..." />
                                </li>

                                <li>
                                    <input name="email" id="email" type="text" placeholder="Email address..." />
                                </li>

                                <li>
                                    <input name="Subject" id="Subject" type="text" placeholder="Subject" />
                                </li>

                            </ul>
                            <div class="comments">
                                <textarea rows="10" name="comments" id="comments" cols="10" placeholder="Enter your message here..."></textarea>
                                <!--comments-->
                            </div>
                            <input name="submit" type="submit" class="submit" value="Submit Now!">
                        </form>
                        <!--contact-form-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--paddingBox-->
        </div>

        <div class="location-map col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.345636940014!2d-72.28983988528587!3d18.513276574229586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e905feb7c119%3A0x49a77c14135927fb!2sPlaza%2041!5e0!3m2!1sfr!2sht!4v1596296129282!5m2!1sfr!2sht" height="350" style="border:0" allowfullscreen></iframe>
                <!--row-->
            </div>
            <!--location-map-->
        </div>

        <!--main-contentbox-->

    </div>

@endsection