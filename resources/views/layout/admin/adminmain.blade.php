

<html>
    <head>
        <title>Page name - @yield('title')</title>
        @section('head')
            <meta name="csrf-token" content="{{csrf_token()}}">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/fontawesome-free/css/all.min.css')}}">
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/jqvmap/jqvmap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/dist/css/adminlte.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/daterangepicker/daterangepicker.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/summernote/summernote-bs4.css')}}">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <link rel="stylesheet" href="{{asset('assetsadmin/plugins/select2/css/select2.min.css')}}">
            <link rel="stylesheet" href="{{asset('assetsadmin/css/style-new.css')}}">
           
        @show
    </head>
    <body class="">
    <div class="app-container">
            
                    @include('layout/admin/topnav')

                    <div class="app-content">
                    @include('layout/admin/sidenav')

                        @yield('content')

                   
</div>
@include('layout/admin/footer')
        </div>

            <script src="{{asset('assetsadmin/plugins/jquery/jquery.min.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('assetsadmin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/chart.js/Chart.min.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/sparklines/sparkline.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/select2/js/select2.full.min.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/moment/moment.min.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/daterangepicker/daterangepicker.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

            <script src="{{asset('assetsadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
            <script src="{{asset('assetsadmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
            <script src="{{asset('assetsadmin/dist/js/adminlte.js')}}"></script>

            <script src="{{asset('assetsadmin/dist/js/pages/dashboard.js')}}"></script>
            <script src="{{asset('assetsadmin/dist/js/demo.js')}}"></script>
            <script src="{{asset('assetsadmin/js/script-new.js')}}"></script>
           


    </body>
</html>