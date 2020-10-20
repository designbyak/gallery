<!DOCTYPE html>
<html>
<title>Edit Album</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<div class="w3-container w3-blue">
<h1><a href="index.php" style="text-decoration:none">Edit Img</a></h1>
</div>
<br>
<a class="w3-btn" href="index.php" style="margin-left:16px">Home</a>
<a class="w3-btn" href="upload-img.php" style="float:right; margin-right:16px">Upload To Gallery</a>
<br>
<br>
<table class='w3-table w3-striped w3-bordered w3-border' style='width:90%;' align='center'>
<tr>
      <th>Images</th>
      <th>Image Title</th>
      <th>Image Description</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
<?php

$connection = mysqli_connect("localhost","root","","upload");

	$get_pro = "select * from upload";

	$run_pro = mysqli_query($connection, $get_pro);
	$count_brands = mysqli_num_rows($run_pro);

	if($count_brands==0){

        echo "<table class='w3-table w3-striped w3-bordered w3-border' style='width:90%;' align='center'>
        <tr>
        <td>

        <div class\"w3-container w3-red\">
        <center><h3>No Image Was Found On The Gallery</h3></center>
      <center><a class=\"w3-btn\" href=\"upload-img.php\" style=\"margin-left:16px\">Upload To Gallery</a></center>
    </div></td>
        </tr>

        </table>";

	}
	while($row_pro=mysqli_fetch_array($run_pro)){

    $pro_image = $row_pro['img'];
    $pro_title = $row_pro['img-title'];
    $pro_desc  = $row_pro['img-desc'];
    $pro_id    = $row_pro['id'];

		echo "

    <tr>
  <td><img src='img/$pro_image' width='40' height='40' /></td>
  <td>$pro_title</td>
  <td>$pro_desc</td>
  <td><a class='w3-btn' href='update-img.php?update=$pro_id'>Update</a></td>
  <td>


  <a class='w3-btn' href='edit.php?img=$pro_id'>Delete</a>

  </td>
  </tr>
		";

  }


  if(isset($_GET['img'])){

    $delete_id = $_GET['img'];

    $delete_img = "delete from upload where id='$delete_id'";

    $run_delete = mysqli_query($connection, $delete_img);

    if($run_delete){

    echo "<script>alert('An Image has been deleted!')</script>";
    echo "<script>window.open('edit.php','_self')</script>";
    }

    }

	?>


</table>



<br>

<div class="w3-container w3-teal">
<h1>Created By <a href="http://instagram.com/designed_by_ak">Akanimoh Ikpe</a></h1>
</div>
</body>
</html>
