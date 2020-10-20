<?php //include("db/db.php");
?>
<!DOCTYPE html>
<html>
<title>Upload To Album</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<div class="w3-container w3-blue">
<h1><a href="index.php" style="text-decoration:none">Upload Image</a></h1>
</div>
<br>
<a class="w3-btn" href="index.php" style="margin-left:16px">Home</a>
<a class="w3-btn" href="edit.php" style="float:right; margin-right:16px">Edit Gallery</a>
<br>
<br>
	<form action="upload-img.php" method="post" enctype="multipart/form-data" class="w3-container" style="width:90%; margin-left:50px; margin-right:50px;
  >
  <label class="w3-label w3-text-blue"><b>Image Name</b></label>
		<input type="text" name="img-title" class="w3-input w3-border w3-round-large" style="width:95%" name="img-title" required/>

    <label class="w3-label w3-text-blue"><b>Image Description</b></label>
      <textarea name="img-desc" class="w3-label w3-text-red" style="width:95%" ></textarea><br>

      <input type="file" name="image" accept='image/*' required/>
      <br>
      <br>
      <input type="submit" name="submit" value="Upload Image" class="w3-btn w3-blue"/>

	</form>
<br>

<div class="w3-container w3-teal">
<h1>Copyright 2018</h1>
</div>
</body>
</html>


<?php

if(isset($_POST['submit'])){

    //getting the text data from the fields
    $img_title = $_POST['img-title'];
    $img_desc = $_POST['img-desc'];
    $uploaded_image = $_FILES['image']['name'];
		$uploaded_image_tmp = $_FILES['image']['tmp_name'];
		move_uploaded_file($uploaded_image_tmp,"img/$uploaded_image");

			$connection = mysqli_connect("localhost","root","","upload");

			$get_pro = "INSERT INTO `upload`(`img-title`,`img-desc`,`img`)
      VALUES ('$img_title','$img_desc','$uploaded_image')";

			$run_pro = mysqli_query($connection, $get_pro);

     global $connection;

     if(!$run_pro){
     echo "<script>alert('Image Was not inserted Sucessfully!')</script>";
     echo "<script>window.open('upload-img.php','_self')</script>";

     }else {
        echo "<script>alert('Image Was inserted Sucessfully!')</script>";
        echo "<script>window.open('upload-img.php','_self')</script>";
     }
}


?>
