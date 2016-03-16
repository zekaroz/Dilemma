<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset("dist/css/skins/_all-skins.min.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
        <div class="wrapper">
            @include('layout.header')
            @include('layout.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                      @yield('title')
                </section>
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->


        <!-- jQuery 2.1.4 -->
        <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset("bootstrap/js/bootstrap.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{ asset("plugins/fastclick/fastclick.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset("dist/js/app.min.js")}}"></script>
        <!-- Sparkline -->
        <script src="{{ asset("plugins/sparkline/jquery.sparkline.min.js")}}"></script>
        <!-- jvectormap -->
        <script src="{{ asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
        <script src="{{ asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="{{ asset("plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="{{ asset("plugins/chartjs/Chart.min.js")}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset("dist/js/demo.js")}}"></script>
    </body>
</html>
