<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('include.head')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    @include('include.header')
    <!-- END HEADER AREA -->


    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        @yield('content')
    </section>
    <!-- End page content -->

    <!-- START FOOTER AREA -->
    @include('include.footer')
    <!-- END FOOTER AREA -->
</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('js/vendor/jquery-3.1.1.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{asset('lib/js/jquery.nivo.slider.js')}}"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script src="{{asset('js/map.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- ajax-mail js -->
<script src="{{asset('js/ajax-mail.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
