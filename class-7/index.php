<?php


$pdo = new PDO('mysql:host=localhost;dbname=ctg-256', "root", "");

if (isset($_GET['delete'])) {
	
	$id = $_GET['delete'];

	$delSql = "DELETE FROM users WHERE id = '$id'";

	$delStatement = $pdo->prepare($delSql);
	$delStatement->execute();
	header("location:index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$number = $_POST['number'];

	//insert begins
	$q = "INSERT INTO users (name, number) VALUES ('$name', '$number')";

	$statement = $pdo->prepare($q);
	$statement->execute();

	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>db form</title>
</head>
<body>
<form method="POST" action="">
	<input type="text" name="name">

	<input type="text" name="number">

	<input type="submit" name="submit">
</form>

<?php
//getdata

$getSql = "SELECT * FROM users";

$getStatement = $pdo->prepare($getSql);
$getStatement->execute();

$result = $getStatement->fetchAll();
?>
<table border="1">
	<tr>
		<th>Name</th>
		<th>Number</th>
		<th>Action</th>
	</tr>
	
		<?php foreach ($result as $value ) {
		
		 ?>
		 <tr>
		<td><?php echo $value['name'] ?></td>
		<td><?php echo $value['number'] ?></td>
		<td><a href="?delete= <?php echo $value['id']; ?> ">Delete</a>||<a href="update.php?id= <?php echo $value['id']; ?>">Update</a></td>
		</tr>
	<?php } ?>
	
</table>

</body>
</html>