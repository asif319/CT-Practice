{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>@yield('title')</title>--}}
{{--    <link rel="stylesheet" href="{{ 'css/app.css' }}">--}}
{{--</head>--}}
{{--<body>--}}
{{--@include('partials.header')--}}

{{--@yield('content')--}}

{{--@include('partials.footer')--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
{{--    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ 'css/bootstrap.min.css' }}">

    <!-- Custom styles for this template -->
{{--    <link href="css/small-business.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ 'css/small-business.css' }}">
    @stack('bottom')

</head>

<body>

<!-- Navigation -->
@include('partials.header')

<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    @yield('image')
    <!-- /.row -->

    <!-- Call to Action Well -->
@yield('mid_sec')

    <!-- Content Row -->
    @yield('last_sec')
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('partials.footer')

<!-- Bootstrap core JavaScript -->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
<script src="{{ 'jquery/jquery.min.js' }}"></script>
{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ 'js/bootstrap.bundle.min.js' }}"></script>

</body>

</html>
