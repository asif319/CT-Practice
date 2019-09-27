<?php

$pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");

$id = $_GET['id'];

//Show Data (Read)
$getSql = "SELECT * FROM registration WHERE id=$id";
$getStatement = $pdo->prepare($getSql);
$getStatement->execute();
$results = $getStatement->fetchAll();
//End show data

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $username = $_POST['username'];


    $upSql = "UPDATE registration SET name='$name', username='$username' WHERE id='$id'";

    $delStatement = $pdo->prepare($upSql);
    $delStatement->execute();
    header("location:registration.php");
}
//End update

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<?php foreach ($results as $result) {?>
    <form action="" method="POST">
        <input type="text" name="name" value="<?php echo $result['name']?>">
        <input type="text" name="username" value="<?php echo $result['username']?>">

        <input type="submit" name="submit" value="Update">
    </form>
<?php  }?>
</body>
</html>
