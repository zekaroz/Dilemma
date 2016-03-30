<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>DiLemma</title>
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

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset("plugins/iCheck/all.css")}}">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
        <!-- jQuery 2.1.4 -->
        <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset("bootstrap/js/bootstrap.min.js")}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js" charset="utf-8"></script>

        <script src="{{ asset("js/JQ.js")  }}" charset="utf-8"></script>

        <script src="{{ asset("plugins/iCheck/icheck.min.js")}}"></script>


        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="margin-left:0px !important;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                      @yield('title')
                </section>
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer" style="margin-left:0px !important;">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2016 <a href="http://almsaeedstudio.com">JQ Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

        @include('layout.loadingSpinner')

        <script type="text/javascript">
            $(function () {
              //iCheck for checkbox and radio inputs
              $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
              });


            });
        </script>

        <script type="text/javascript">
            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
        </script>

        <script src="{{ asset("plugins/fastclick/fastclick.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset("dist/js/app.min.js")}}"></script>

        <script src="{{ asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
        <script src="{{ asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
        <script src="{{ asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>

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
