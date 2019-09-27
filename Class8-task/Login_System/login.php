<?php
session_start();
if (isset($_SESSION['logged'])){
    header("location:registration.php");
}

use phpDocumentor\Reflection\Location;

include 'Connection.php';

$db = new Connection();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $res = $db->login($username, $password);

   if (count($res) == 1){
session_start();
foreach ($res as $use){
    $_SESSION['logged'] = $use['username'];
    header("location:registration.php");
}
   }else{
       echo "Wrong username password";
   }
}
?>

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
<h1>Login Form</h1>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Username">
    <br><br>
    <input type="password" name="password" placeholder="Password">
    <br><br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
