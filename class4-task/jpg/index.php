<?php
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== true){

        if($file_size <= 1048576){

            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }else{

                echo "Failed";
            }
        }else{
            echo "File size must be excately 1 MB";
        }
    }else{
        echo "extension not allowed, please choose a JPEG or PNG file";
    }


}
?>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>

</body>
</html>