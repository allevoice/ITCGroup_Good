<!--=====================================-->
<!--============== Banner ===============-->
<!--=====================================-->
<div id="carousel-example-generic" class="carousel slide colorback" data-ride="carousel" >

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div  class="pull-right">
                <img src="{{asset('public/assets/img/banners/home-banner.jpg')}}" class="imgbanner"/>
            </div>

            <div class="viewlogoimg">
                <img src="{{asset('public/assets/img/logo/small-logo.png')}}" class="pull-left imglogo"  alt="small-logo" />
            </div>


            <div class="carousel-caption img_carousel">
                <h1>Strong Together For Better Results</h1>
                <p>We are ITC Group : Information Technology And Communication. We are here to make your dreams come true.</p>
                <div class="banner-btn transparent-btn">
                    <a href="{{route('contact.'.app()->getLocale())}}">Contact Us Now</a>
                </div>
            </div>
        </div>


        <div class="item">
            <div  class="pull-right">
                <img src="{{asset('public/assets/img/banners/home-banner2.jpg')}}"  class="imgbanner"/>
            </div>

            <div class="viewlogoimg">
                <img src="{{asset('public/assets/img/logo/small-logo.png')}}" class="pull-left imglogo"  alt="small-logo" />
            </div>

            <div class="carousel-caption img_carousel">
                <h1>Strong Together For Better  2</h1>
                <p>We are ITC Group : Information Technology And Communication. We are here to make your dreams come true.</p>
                <div class="banner-btn transparent-btn">
                    <a href="{{route('contact.'.app()->getLocale())}}">Contact Us Now</a>
                </div>
            </div>
        </div>


    </div>

    <div class="explore-services BlueBg semibold-font" id="explore">Explore the
        services
        <figure class="bounce">
            <img src="{{asset('public/assets/img/logo/arrow-down.png')}}" alt="arrow" />
        </figure>
        <!--explore-services-->
    </div>
</div>

