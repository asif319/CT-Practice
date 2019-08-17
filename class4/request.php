<!-- <?php

echo $_GET['Mib'] . "<br>";
echo $_GET['address'] . "<br>";
echo $_GET['phone'] . "<br>";



?> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<?php
      
      if (isset($_POST['Mib'] )) {
      	$v = $_POST['Mib'];
      }

       if (isset($_POST['address'] )) {
      	$d = $_POST['address'];
      }

      $c = greet($v, $d);

      echo $c;

      function greet($num1, $num2){

      	$sum = $num1 * $num2;

      	return $sum;
      } 
      ?> 	
       
	  
</div>

<!-- <div>
	<?php  echo $_GET['address'] . "<br>"; ?>
</div>

<div>
	<?php  echo $_GET['phone'] . "<br>"; ?>
</div> -->
</body>
</html>