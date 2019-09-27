<?php

$pdo = new PDO("mysql:host=localhost;dbname=class-7", "root", "");


//Delete
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $delSql = "DELETE FROM mobiles WHERE id = '$id'";

    $delStatement = $pdo->prepare($delSql);
    $delStatement->execute();
    header("location:index.php");
}

//Insert data (Create)

if (isset($_POST['submit'])){

    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $ram = $_POST['ram'];
    $camera = $_POST['camera'];



    $mobileSql = "INSERT INTO mobiles(brand, price, ram, camera) VALUES ('$brand', '$price', '$ram', '$camera')";

    $statement = $pdo->prepare($mobileSql);
    $statement->execute();


//End Insert


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="brand" placeholder="brand">
    <input type="text" name="price" placeholder="price">
    <input type="text" name="ram" placeholder="ram">
    <input type="text" name="camera" placeholder="camera">
    <input type="submit" name="submit">
</form>

<?php

//Show Data (Read)

$getSql = "SELECT * FROM mobiles";

$getStatement = $pdo->prepare($getSql);
$getStatement->execute();

$results = $getStatement->fetchAll();
?>

<table border="1">
    <tr>
        <th>Brand</th>
        <th>Price</th>
        <th>Ram</th>
        <th>Camera</th>
        <th>Action</th>
    </tr>

    <?php foreach ($results as $result) {?>
        <tr>
            <td><?php echo $result['brand']?></td>
            <td><?php echo $result['price']?></td>
            <td><?php echo $result['ram']?></td>
            <td><?php echo $result['camera']?></td>
            <td><a href="update.php?id= <?php echo $result['id']; ?>">Update</a>| <a href="?delete= <?php echo $result['id']?>">Delete</a></td>
        </tr>
    <?php  }?>
</table>
</body>
</html>


