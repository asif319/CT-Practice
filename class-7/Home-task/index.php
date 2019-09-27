<?php

$pdo = new PDO("mysql:host=localhost;dbname=home-task", "root", "");


// Insert form 1
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userSql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $statement = $pdo->prepare($userSql)->execute();

}
// Insert form 2
if (isset($_POST['post'])){

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone_number'];

    $userDetailsSql = "INSERT INTO users_table (first_name, last_name, address, phone_number) VALUES ('$firstName', '$lastName', '$address', '$phoneNumber')";

    $uStatement = $pdo->prepare($userDetailsSql)->execute();
}
// Delete Form 1
if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delSql = "DELETE FROM users WHERE id = '$id'";
    $delStatement = $pdo->prepare($delSql);
    $delStatement->execute();
    header("location:index.php");
}

// Delete Form 2
if (isset($_GET['del'])){
    $id1 = $_GET['del'];

    $delSql1 = "DELETE FROM users_table WHERE id = '$id1'";
    $delStatement = $pdo->prepare($delSql1);
    $delStatement->execute();
    header("location:index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">

    <input type="text" name="username" placeholder="Username">

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Password">

    <input type="submit" name="submit">

</form>
<br><br>
<?php
// Show Form 1
$showSql = "SELECT * FROM users";

$showStatement = $pdo->prepare($showSql);
$showStatement->execute();

$users = $showStatement->fetchAll();

?>

<table border="1">
    <?php Foreach($users as $user) {?>
    <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><?php echo $user['username']?></td>
        <td><?php echo $user['email']?></td>
        <td><a href="form2.php?id=<?php echo $user['id']; ?>">Update</a> | <a href="?delete= <?php echo $user['id']?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
<br><br>
<form action="" method="POST">

    <input type="text" name="first_name" placeholder="First Name">

    <input type="text" name="last_name" placeholder="Last Name">

    <input type="text" name="address" placeholder="Address">

    <input type="text" name="phone_number" placeholder="Phone Number">

    <input type="submit" name="post">
</form>
<br><br>
<?php
// Show Form 1
$show1 = "SELECT * FROM users_table";

$showState = $pdo->prepare($show1);
$showState->execute();

$userds = $showState->fetchAll();

?>

<table border="1">
    <?php Foreach($userds as $userd) {?>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><?php echo $userd['first_name']?></td>
            <td><?php echo $userd['last_name']?></td>
            <td><?php echo $userd['address']?></td>
            <td><?php echo $userd['phone_number']?></td>
            <td><a href="form2.php?id1=<?php echo $userd['id']; ?>">Update</a> | <a href="?del= <?php echo $userd['id']?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>


</body>
</html>
