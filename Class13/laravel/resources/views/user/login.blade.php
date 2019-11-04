<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
@include('error.error')
<form action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}

    <input type="text" name="name"><br>


    <input type="password" name="password"><br>


    <input type="submit" name="submit" value="LOGIN"><br>


</form>
</body>
</html>
