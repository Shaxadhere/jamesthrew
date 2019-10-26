<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="container">
<form action="" method="post">
<?php

include('../Models/config.php');
include('../Functions/main.php');

$id = $_GET["id"];
$query = getInfo("tbl_user", "PK_ID", $id,$connect);
$row = mysqli_fetch_array($query);
$FullName = $row['FullName'];
$Email = $row['Email'];
$Password = $row['Password'];

?>
<h3>Are you sure you want to delete this?</h3>
<input type="hidden" value="<?php echo $id ?>">
  <div class="form-group">
    <label>Full Name : <?php echo $FullName ?></label>
  </div>

  <div class="form-group">
    <label>Email : <?php echo $Email ?></label>
  </div>

  <div class="form-group">
    <label>Password : <?php echo $Password ?></label>
  </div>

  <button type="submit" name="delete" class="btn btn-primary">Yes Delete</button>
</form>
</div>

</body>
<?php


if(isset($_POST["delete"]))
{
  $table = "tbl_user";
  $PrimaryKey = "PK_ID";
  deleteData($table, $PrimaryKey, $id, $connect);
  redirectWindow('index.php');
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>