<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- basic   -->
        <meta charset="UTF-8">
        <title>Hectar, Asia's leading agro marketplace.</title>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!-- css   -->	
        <link rel="stylesheet" href="{{asset('assetfront/css/plugins.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('assetfront/css/color.css')}}" type="text/css" />
        <!--  favicons  -->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
@include('layout.frontend.header')


@yield('content')

@include('layout.frontend.footer')

<!--=============== scripts  ===============-->
<script src="{{asset('assetfront/js/jquery.min.js')}}"></script>
<script src="{{asset('assetfront/js/plugins.js')}}"></script>
<script src="{{asset('assetfront/js/scripts.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOU_API_KEY_HERE&libraries=places"></script>
<script src="{{asset('assetfront/js/map-single.js')}}"></script>
</body>
</html>