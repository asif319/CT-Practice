<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
      
      if (isset($_POST['submit'] )) {
      	$f = $_FILES['img']['tmp_name'];
      	//$img_name = "byby.jpg";
      	//move_uploaded_file($f, "photos/" . $img_name);
      	//echo "<img width='100px' src='photos/".$img_name."'>";

      }

      

     
      ?>
<form method="POST" action="" enctype="multipart/form-data">
	<div>
<input type="file" name="img" placeholder="password" required><br>
</div>

<!-- <div>
<input type="text" name="phone">
</div> -->

<div>
<input type="submit" name="submit" value="pathao">
</div>
</form>
</body>
</html>