<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tokap Ryan - @yield('title')</title>
    <link rel="icon" type="png/image" href="{{ url('favicon.png') }}">
    <!-- Bootstrap core CSS-->
    <link href="{{ url('theme-sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ url('theme-sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ url('theme-sbadmin/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      @yield('content')
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('theme-sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('theme-sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
