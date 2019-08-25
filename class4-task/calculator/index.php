<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form action="" method="get">

    <input type="number" name="num1">

    <input type="number" name="num2">

    <input type="submit" name="addition" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="multi" value="x">
    <input type="submit" name="div" value="/">


</form>
</body>
</html>

<?php

if (isset($_GET['addition'])){
    if (!empty($_GET['num1']) && !empty($_GET['num2'])){
        $sum = $_GET['num1'] + $_GET['num2'];
        echo $sum;
    }else{
        echo "Please Enter Numbers";
    }

}

if (isset($_GET['sub'])){
    if (!empty($_GET['num1']) && !empty($_GET['num2'])){
        $sum = $_GET['num1'] - $_GET['num2'];
        echo $sum;
    }else{
        echo "Please Enter Numbers";
    }

}

if (isset($_GET['multi'])){
    if (!empty($_GET['num1']) && !empty($_GET['num2'])){
        $sum = $_GET['num1'] * $_GET['num2'];
        echo $sum;
    }else{
        echo "Please Enter Numbers";
    }

}

if (isset($_GET['div'])){
    if (!empty($_GET['num1']) && !empty($_GET['num2'])){
        $sum = $_GET['num1'] / $_GET['num2'];
        echo $sum;
    }else{
        echo "Please Enter Numbers";
    }

}
?>