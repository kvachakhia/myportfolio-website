<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>DiMa.Ge - Admin</title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Theme Css -->
        <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/slidebars.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/menu.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <script src="{{ asset('/assets/js/jquery3.min.js') }}"></script>
        <link href="{{ asset('/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">


    </head>
<body>

    @yield('content')
  <!-- jQuery -->
  <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/js/jquery-migrate.js') }}"></script>
  <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('/assets/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('/assets/js/slidebars.min.js') }}"></script>
  

  <!--app js-->
  <script src="{{ asset('/assets/js/jquery.app.js') }}"></script>   

  <script src="{{ asset('/assets/plugins/tabledit/jquery.tabledit.js') }}"></script>       
  <script src="{{ asset('/assets/plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
  <script src="{{ asset('/assets/plugins/tiny-editable/numeric-input-example.js') }}"></script>
 
  <script src="{{ asset('/assets/plugins/dropify/js/dropify.min.js') }}"></script>        




</body>
</html>
