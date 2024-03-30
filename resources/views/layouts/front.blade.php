<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    
    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <!--link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet"-->
   
</head>
<body onload="loadFunction()">
<div id="preloader">
  <div id="loader"></div>
</div>
      @include('layouts.inc.frontendnav')
    <div class="content">
        @yield('content')  
    </div>
    <br>
    <br>
    <br>
    <br>
    @include('layouts.inc.frontfooter')           
    

<!-- Scripts -->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" defer></script>

<script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>

<script src="{{ asset('frontend/js/custom.js') }}" defer></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script>
  var loading = document.getElementById('preloader')
  function loadFunction() {
    loading.style.display= 'none';
  }
  </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
    <script>
        swal("{{session('status')}}");
    </script>
@endif()   

@yield('scripts')

   </body>
</html>
