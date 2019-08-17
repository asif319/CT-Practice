<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="" method="POST">
    <label for="user_name">User Name</label>
    <input type="text" name="user_name">

    <label for="password">Password</label>
    <input type="password" name="password">

    <input type="submit" name="submit">


</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {

    if (!empty($_POST['user_name']) && !empty($_POST['password'])) {

        logIn();

    }elseif(!empty($_POST['user_name'])) {
        echo "Please Provide Your Password";
    }elseif (!empty($_POST['password'])){
        echo "Please Provide Your User Mib";
    }else{
        echo "Please Provide Your User Mib & Password";
    }

}


function logIn()
{
    if (strlen($_POST['password']) >= 6) {

        echo "You've been logged in successfully";
    } else {
        echo "Please provide at leaset 6 character of password";
    }
}

?>