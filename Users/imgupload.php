<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<?php

include('../Models/config.php');

?>
  <div class="form-group">
    <label>Image</label>
    <input type="file" name="img" class="form-control" placeholder="Choose Image">
  </div>
  <button type="submit" name="upload" class="btn btn-primary">Upload</button>
</form>
</div>

</body>
<?php


if(isset($_POST["upload"]))
{
	$file_name = rand(1000,5000)."-".$_FILES['upload']['name'];
	move_uploaded_file($_FILES['upload']['tmp_name'],"../Template/img/".$file_name);
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>