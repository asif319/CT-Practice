<?php

$pdo = new PDO('mysql:host=localhost;dbname=ctg-256', "root", "");


//getdata

$del_id = $_GET['id'];

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$number = $_GET['number'];

	
}

$getSql = "SELECT * FROM users WHERE id='$del_id'";

$getStatement = $pdo->prepare($getSql);
$getStatement->execute();

$result = $getStatement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<?php foreach ($result as $value ) {
		
		 ?>
<form method="POST" action="">
	<input type="text" name="name" value="<?php echo $value['name'] ?>">

	<input type="text" name="number" value="<?php echo $value['number'] ?>">

	<input type="submit" name="submit">

	
</form>
<?php } ?>
</body>
</html>