<!DOCTYPE html>
<html>
<head>
<title>Photo Album</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<style>
/* The Image Box */
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

/* The Image */
div.img img {
    width: 100%;
    height: 250px;
    cursor: pointer;
}

/* Description of Image */
div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

/* Add Responsiveness */
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0.1)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 30px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive Columns */
@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    .modal-content {
        width: 100%;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

/* Clear Floats */
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>

</head>
<body>

<div class="w3-container w3-blue">
<h1>Esm Gallery</h1>
</div>
<br>
<a class="w3-btn" href="upload-img.php" style="margin-left:16px">Upload To Gallery</a> <br><br>
<a class="w3-btn" href="edit.php" style="float:right; margin-right:16px">Edit Gallery</a>
<br>
<br>

<div class="w3-container">

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

<div class='responsive'>
  <div class='img'>
  <img src='img/$pro_image' alt='Trolltunga Norway' width='300px' height='300px'>
  <div class='desc'>$pro_title</div>
  <div class='clearfix'></div>

  </div>
</div>
		";

  }


?>

</div>


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">x</span>
  <img class="modal-content" id="img01">
  <div id="caption"><?php echo "$pro_desc" ?></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
}
</script>

<br>
<div class="w3-container w3-teal">
<h1>Created By <a href="http://instagram.com/designed_by_ak">Akanimoh Ikpe</a></h1>
</div>
</body>
</html>
