<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="icon" type="image/png" href="/imagenes/pollito.png" />

  <link href="{{ asset('/admin-lte/plugins/font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/admin-lte/dist/css/adminlte.css') }}" rel="stylesheet">
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini sidebar-collapse" style="height: auto;">

  
  @include('includes.navbar')  
  @include('includes.sidebar')
  <div class="content-wrapper">
    @yield('content')
  </div>
  
 
  <script src="{{ asset('/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/admin-lte/dist/js/adminlte.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('/admin-lte/plugins/chartjs-old/Chart.min.js') }}"></script>
 
</body>
</html>
