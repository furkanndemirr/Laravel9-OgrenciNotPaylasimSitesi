<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
@yield('head')
<body>
@section('header')
    HEADER2.
@show
@section('sidebar')
    This is the master sidebar1.
@show
@yield  ('slider')

<div class="container">
    @yield('content')
</div>
@section('footer')
    FOOTER.
@show
</body>
</html>
