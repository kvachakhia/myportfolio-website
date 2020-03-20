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
    </head>
<body>

    @yield('content')
  <!-- jQuery -->
  <script src="{{ asset('/assets/js/jquery3.min.js') }}"></script>
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

  <script type="text/javascript">

    $(document).ready(function(){  
        $('#my-table').Tabledit({
        url:'/dashboard/menus/update/',
        columns:{
        identifier:[0, "id"],
        editable:[[1, 'name'], [2, 'slug']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
        if(data.action == 'delete')
        {
            console.log( 'washla');
            $('#'+data.id).remove();
        }
        }
        });
    
    }); 


</script>

</body>
</html>
