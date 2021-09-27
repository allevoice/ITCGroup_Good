<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin | @yield('title')</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="{{asset('public/assetsadm/css/bootstrap.css')}}" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="{{asset('public/assetsadm/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="{{asset('public/assetsadm/css/custom.css')}}" rel="stylesheet" />
        <!-- GOOGLE FONTS-->

    </head>
<body>
<div id="wrapper">

    @include('template.menuadm')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">



            @yield('admincontenent')



            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('public/assetsadm/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('public/assetsadm/js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('public/assetsadm/js/jquery.metisMenu.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('public/assetsadm/js/custom.js')}}"></script>


</body>
</html>
