<?php
$pdo = new PDO("mysql:host=localhost;dbname=home-task", "root", "");

$id = $_GET['id'];

$showE = "SELECT * FROM users WHERE id=$id";

$getShow = $pdo->prepare($showE);
$getShow->execute();

$shows = $getShow->fetchAll();

// Update Form 1

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $editSql = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id=$id";

    $editState = $pdo->prepare($editSql);
    $editState->execute();
    header("location:index.php");

// Update Form 2
    if (isset($_POST['submit'])){

        $id1 = $_GET['id1'];

        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $address = $_POST['address'];
        $phoneNumber = $_POST['phone_number'];

        $edit1Sql = "UPDATE users_table SET first_name='$firstName', last_name='$lastName', address='$address', phone_number='$phoneNumber' WHERE id='$id1'";

        $edit1State = $pdo->prepare($edit1Sql);
        $edit1State->execute();
        header("location:index.php");
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
    <title>Document</title>
</head>
<body>
<?php foreach ($shows as $show) { ?>
    <form action="" method="POST">

        <input type="text" name="username" placeholder="Username" value="<?php echo $show['username'] ?>">

        <input type="email" name="email" placeholder="Email" value="<?php echo $show['email'] ?>">

        <input type="password" name="password" placeholder="Password" value="<?php echo $show['password'] ?>">

        <input type="submit" name="submit">

    </form>
<?php } ?>

<?php
$id1 = $_GET['id1'];

$show2 = "SELECT * FROM users_table WHERE id=$id1";

$show2State = $pdo->prepare($show2);
$show2State->execute();

$show2s = $show2State->fetchAll();
?>

<?php foreach ($show2s as $show2) { ?>
    <form action="" method="POST">

        <input type="text" name="first_name" placeholder="First Name" value="<?php echo $show2['first_name'] ?>">

        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $show2['last_name'] ?>">

        <input type="text" name="address" placeholder="Address" value="<?php echo $show2['address'] ?>">

        <input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo $show2['phone_number'] ?>">

        <input type="submit" name="submit">
    </form>
<?php } ?>
</body>
</html>





