<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('css')
    <!-- modernizr JS
		============================================ -->
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
@include('_partials._header')
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
@include('_partials._mobile_menu')
@include('._partials._menu')

<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<!-- Main Menu area End-->
<!-- Start Status area -->
@yield('content')
<!-- End Realtime sts area-->
<!-- Start Footer area-->

<!-- End Footer area-->
<!-- jquery
    ============================================ -->
@stack('js')
</body>

</html>
