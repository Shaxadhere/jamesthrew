<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<?php

include('../Models/config.php');
include('../Functions/main.php');

?>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label>Image</label>
    <input type="file" name="img" class="form-control" placeholder="">
  </div>

  <button type="submit" name="insert" class="btn btn-primary">Save</button>
</form>
</div>

</body>
<?php

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//check
if(isset($_POST["insert"]))
{
  $check = getimagesize($_FILES["img"]["img"]);
  if($check !== false){
    echo "File is an image - " . check["mime"] . ".";
    $uploadOk = 1;
    echo "<img src='uploads/'>";
  }
  else{
    echo "File is not an image";
    $uploadOk = 0;
  }
}


?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>