<!DOCTYPE html>
<html>
<title><?php

$connection = mysqli_connect("localhost","root","","upload");
if(isset($_GET['update'])){

$product_id = $_GET['update'];

$get_pro = "select * from upload where id='$product_id'";

$run_pro = mysqli_query($connection, $get_pro);

while($row_pro = mysqli_fetch_array($run_pro)){

    $pro_id = $row_pro['id'];
    $pro_title = $row_pro['img-title'];
    $pro_desc = $row_pro['img-desc'];
    $pro_image = $row_pro['img'];


echo "$pro_title" ;
}
}
?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<div class="w3-container w3-blue">
<h1><a href="index.php" style="text-decoration:none">
Edit Image
</a></h1>
</div>
<br>
<a class="w3-btn" href="index.php" style="margin-left:16px">Home</a>
<a class="w3-btn" href="upload-img.php" style="float:right; margin-right:16px">Upload To Gallery</a>
<br>
<br>
<form method="POST" enctype="multipart/form-data">



<table class='w3-table w3-striped w3-bordered w3-border' style='width:90%;' align='center'>

<tr>
      <th>Images</th>
      <th>Image Title</th>
      <th>Image Description</th>
      <th>Change Image</th>
    </tr>
    <tr>
    <?php

    $connection = mysqli_connect("localhost","root","","upload");
	if(isset($_GET['update'])){

	$product_id = $_GET['update'];

	$get_pro = "select * from upload where id='$product_id'";

	$run_pro = mysqli_query($connection, $get_pro);

    $count_brands = mysqli_num_rows($run_pro);

	if($count_brands==0){

        header("Location:404.php");

	}
    while($row_pro = mysqli_fetch_array($run_pro)){

		$pro_id = $row_pro['id'];
		$pro_title = $row_pro['img-title'];
        $pro_desc = $row_pro['img-desc'];
        $pro_image = $row_pro['img'];

    }
    echo "
    <td><img src='img/$pro_image' width='80' height='80' /></td>
    <td><input  name='img-title' class='w3-input w3-hover-green' type='text' value='$pro_title' required></td>
    <td><input  name='img-desc' class='w3-input w3-hover-green' type='text' value='$pro_desc' required></td>
    <td><input type='file' name='image' accept='image/*'/></td>
    </tr>
    <tr>
    <td><input type='submit' name='submit' value='Update' class='w3-btn w3-blue'/></td>
    </tr>
";
    }
    if(!isset($_GET['update'])){

       header("Location:edit.php");
    }

    if(isset($_POST['submit'])){
        $img_title = $_POST['img-title'];
            $img_desc = $_POST['img-desc'];
            $uploaded_image = $_FILES['image']['name'];
            $uploaded_image_tmp = $_FILES['image']['tmp_name'];
        if ($uploaded_image){
            $img_title = $_POST['img-title'];
            $img_desc = $_POST['img-desc'];
            $uploaded_image = $_FILES['image']['name'];
            $uploaded_image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($uploaded_image_tmp,"img/$uploaded_image");
            global $connection;
            $insert_img = "UPDATE `upload` SET `img-title`= '$img_title',`img-desc`= '$img_desc',`img`= '$uploaded_image' WHERE id='$product_id'";
            $pro = mysqli_query($connection, $insert_img);
        }else{
            $img_title = $_POST['img-title'];
            $img_desc = $_POST['img-desc'];
            $uploaded_image = $pro_image;
            $uploaded_image_tmp = $pro_image;
            global $connection;
            $insert_img = "UPDATE `upload` SET `img-title`= '$img_title',`img-desc`= '$img_desc',`img`= '$uploaded_image' WHERE id='$product_id'";
            $pro = mysqli_query($connection, $insert_img);
        }
        if(!$pro){
             echo "<script>alert('Error Updating Image')</script>";
             echo "<script>window.open('edit.php','_self')</script>";

        }else {
                echo "<br><br><div class=\"w3-container w3-red w3-card-8\">Image Was Updated Sucessfully! </div> <br>";
                echo "<meta http-equiv='refresh' content='1, URL=update-img.php?update=$pro_id'>";
        }
        }
?>
</table>
</form>
<br>

<div class="w3-container w3-teal">
<h1>Created By <a href="http://instagram.com/designed_by_ak">Akanimoh Ikpe</a></h1>
</div>
</body>
</html>
