<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png"> --}}
    <link href={{ asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{ asset("assets/font-awesome/css/font-awesome.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/plugins/dataTables/datatables.min.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/plugins/sweetalert/sweetalert.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/plugins/toastr/toastr.min.css")}} rel="stylesheet">
    <!-- Toastr style -->
    <link href={{ asset("assets/css/plugins/toastr/toastr.min.css")}} rel="stylesheet">

    {{-- Data Table --}}
    <link href={{ asset("assets/css/plugins/dataTables/datatables.min.css")}} rel="stylesheet">


    <!-- Gritter -->
    <link href={{ asset("assets/js/plugins/gritter/jquery.gritter.css")}} rel="stylesheet">

    <link href={{ asset("assets/css/animate.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/style.css")}} rel="stylesheet">

  
    
    @stack('css')

</head>

<body class="md-skin">
    <div id="wrapper">
    {{-- Sidebar --}}
    @include('layouts.sidebar')


        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
       {{-- Navbar --}}
       @include('layouts.navbar')
        </div>


        <div class="wrapper wrapper-content">
       
            {{-- Content --}}
            @yield('content')


        </div>


        {{-- Footer --}}
        @include('layouts.footer')

        </div>
      
    </div>

    <!-- Mainly scripts -->
    <script src={{ asset("assets/js/jquery-3.1.1.min.js")}}></script>
    <script src={{ asset("assets/js/popper.min.js")}}></script>
    <script src={{ asset("assets/js/bootstrap.min.js")}}></script>
    <script src={{ asset("assets/js/plugins/metisMenu/jquery.metisMenu.js")}}></script>
    <script src={{ asset("assets/js/plugins/slimscroll/jquery.slimscroll.min.js")}}></script>

    <script src={{ asset("assets/js/plugins/dataTables/datatables.min.js")}}></script>
    <script src={{ asset("assets/js/validator.min.js")}}></script>
    <script src={{ asset("assets/js/plugins/sweetalert/sweetalert.min.js")}}></script>

    <!-- Flot -->
    <script src={{ asset("assets/js/plugins/flot/jquery.flot.js")}}></script>
    <script src={{ asset("assets/js/plugins/flot/jquery.flot.tooltip.min.js")}}></script>
    <script src={{ asset("assets/js/plugins/flot/jquery.flot.spline.js")}}></script>
    <script src={{ asset("assets/js/plugins/flot/jquery.flot.resize.js")}}></script>
    <script src={{ asset("assets/js/plugins/flot/jquery.flot.pie.js")}}></script>
    <script src={{ asset("assets/plugins/flot/jquery.flot.symbol.js")}}></script>
    <script src={{ asset("assets/plugins/flot/jquery.flot.time.js")}}></script>


    <!-- Peity -->
    <script src={{ asset("assets/js/plugins/peity/jquery.peity.min.js")}}></script>
    <script src={{ asset("assets/js/demo/peity-demo.js")}}></script>

    <!-- jQuery UI -->
    <script src={{ asset("assets/js/plugins/jquery-ui/jquery-ui.min.js")}}></script>

    <!-- Jvectormap -->
    <script src={{ asset("assets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js")}}></script>
    <script src={{ asset("assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>

    <!-- Custom and plugin javascript -->
    <script src={{ asset("assets/js/inspinia.js")}}></script>
    <script src={{ asset("assets/js/plugins/pace/pace.min.js")}}></script>

    <!-- GITTER -->
    <script src={{ asset("assets/js/plugins/gritter/jquery.gritter.min.js")}}></script>

    <!-- ChartJS-->
    <script src={{ asset("assets/js/plugins/chartJs/Chart.min.js")}}></script>

    <!-- Toastr -->
    <script src={{ asset("assets/js/plugins/toastr/toastr.min.js")}}></script>

    <!-- EayPIE -->
    <script src={{ asset("assets/js/plugins/easypiechart/jquery.easypiechart.js")}}></script>

    <!-- Sparkline -->
    <script src={{ asset("assets/js/plugins/sparkline/jquery.sparkline.min.js")}}></script>
       
    <!-- Sparkline demo data  -->
    <script src={{ asset("assets/js/demo/sparkline-demo.js")}}></script>

    {{-- Data Table --}}
    <script src={{ asset("assets/js/plugins/dataTables/datatables.min.js")}}></script>

    

  
  
    @stack('scripts')
</body>

</html>