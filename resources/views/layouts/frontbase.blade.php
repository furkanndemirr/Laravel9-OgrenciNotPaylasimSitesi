<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>@yield("title")</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/color/color-1.css">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendors/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendors/revolution/css/navigation.css">
    <!-- REVOLUTION SLIDER END -->
    @yield("head")
</head>
<body id="bg">

@include("home.header")


@yield('content')

@include("home.footer")
@yield('foot')

</body>
</html>
