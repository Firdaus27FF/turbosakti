<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Pelanggan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/custom.css')}}">

</head>

<body>

    <!--header area start-->
    <!--Offcanvas menu area start-->
   
    <!--header area end-->

    @section('nav')
            @include('users.nav')
        @show

    <!--slider area start-->
            @yield('content')
    <!--shipping area end-->
	
	
    <!--footer area start-->
    @section('footer')
        @include('users.footer')
    @show 
    <!--footer area end-->
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{ asset('user/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('user/assets/js/main.js')}}"></script>
</body>
<!--   03:22:07 GMT -->
</html>

