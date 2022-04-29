<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="{{asset('assets')}}/vendor/modernizr/modernizr.js"></script>
    @yield('head')
</head>
<body>

@yield('content')

@yield('foot')

</body>
</html>
