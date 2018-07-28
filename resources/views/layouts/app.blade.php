<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Office Management</title>

  <!-- Bootstrap core CSS -->

  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/nprogress.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/green.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/jqvmap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/daterangepicker.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/maps/jquery-jvectormap-2.0.3.css')}}" />
  <link href="{{asset('assets/css/icheck/flat/green.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/nprogress.js')}}"></script>
    


  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
@stack('scripts')
</head>


<body class="nav-md">

  <div class="container body">

      @include('partials.header')
      @include('partials.sidebar')
      @yield('content')
      @include('partials.footer')


  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- gauge js -->
  <!-- <script type="text/javascript" src="{{asset('assets/js/gauge/gauge.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/gauge/gauge_demo.js')}}"></script> -->
  <!-- bootstrap progress js -->
  <script src="{{asset('assets/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
  <script src="{{asset('assets/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <!-- icheck -->
  <script src="{{asset('assets/js/icheck/icheck.min.js')}}"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{asset('assets/js/moment/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/datepicker/daterangepicker.js')}}"></script>
  <!-- chart js -->
  <script src="{{asset('assets/js/chartjs/chart.min.js')}}"></script>

  <script src="{{asset('assets/js/custom.js')}}"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.pie.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.orderBars.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.time.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.spline.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.stack.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/curvedLines.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/flot/jquery.flot.resize.js')}}"></script>
  


  <!-- worldmap -->
  <script type="text/javascript" src="{{asset('assets/js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/maps/gdp-data.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>
  <!-- pace -->
  <script src="{{asset('assets/js/pace/pace.min.js')}}"></script>

  <!-- skycons -->
  <script src="{{asset('assets/js/skycons/skycons.min.js')}}"></script>
 
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
