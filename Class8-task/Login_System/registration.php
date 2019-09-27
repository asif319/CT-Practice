<?php
session_start();
if (!isset($_SESSION['logged'])){
    header("location:login.php");
}



$pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");

//Insert data (Create)
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $regSql = "INSERT INTO registration (name, username, password) VALUES ('$name', '$username', '$password')";

    $statement = $pdo->prepare($regSql);
    $statement->execute();
}
//End Insert

//Delete
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $delSql = "DELETE FROM registration WHERE id = '$id'";

    $delStatement = $pdo->prepare($delSql);
    $delStatement->execute();
    header("location:registration.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<h1>Registration Form</h1>
<form action="" method="POST">

    <input type="text" name="name" placeholder="name">
    <br><br>

    <input type="text" name="username" placeholder="username">
    <br><br>
    <input type="password" name="password" placeholder="password">
    <br><br>
    <input type="submit" name="submit">
</form>

<br>

<h1>List</h1>

<form action="" method="POST">
    <input type="text" name="user" placeholder="Search User">
    <input type="submit" name="search" value="Search Now">
</form>

<?php
if (isset($_POST['search'])) {
    $search = $_POST['user'];
    ?>

    <?php
//Show Search Data
    $getSql = "SELECT * FROM registration WHERE name LIKE '%$search%'";

    $getStatement = $pdo->prepare($getSql);
    $getStatement->execute();
    $results = $getStatement->fetchAll();
    ?>


    <br><br>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>

        <?php foreach ($results as $result) { ?>
            <tr>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['username'] ?></td>

                <td><a href="reg_update.php?id= <?php echo $result['id']; ?>">Update</a>| <a
                            href="?delete= <?php echo $result['id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>

    <br>




<?php
} else {
    ?>


    <?php
//Show Data (Read)
    $getSql = "SELECT * FROM registration";

    $getStatement = $pdo->prepare($getSql);
    $getStatement->execute();
    $results = $getStatement->fetchAll();
    ?>


    <br><br>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>

        <?php foreach ($results as $result) { ?>
            <tr>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['username'] ?></td>

                <td><a href="reg_update.php?id= <?php echo $result['id']; ?>">Update</a>| <a
                            href="?delete= <?php echo $result['id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>

<!--    Search else closing-->
<?php } ?>
<br>
<a href="logout.php">(<?php echo $_SESSION['logged']?>)Logout</a>
</body>
</html>

