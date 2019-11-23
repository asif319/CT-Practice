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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
{{--    <link href="css/small-business.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/small-business.css') }}">
    @stack('bottom')

</head>

<body>

<!-- Navigation -->
{{--@include('partials.header')--}}
@yield('navbar')

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
