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

//Including Files
include('../Models/config.php');
include('../Functions/main.php');

//Getting ID


$id = mysqli_real_escape_string($connect, $_GET["id"]);


//Getting Info
$query = getInfo("tbl_user", "PK_ID", $id, $connect);

//Arranging Data
$row = mysqli_fetch_array($query);
$FullName = $row['FullName'];
$Email = $row['Email'];
$Password = $row['Password'];

?>
<input type="hidden" value="<?php echo $id ?>">
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="FullName" value="<?php echo $FullName ?>" class="form-control" placeholder="Enter Full Name">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="Email" value="<?php echo $Email ?>" class="form-control" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" value="<?php echo $Password ?>" class="form-control" placeholder="Enter Password">
  </div>

  <button type="submit" name="save" class="btn btn-primary">Save</button>
</form>
</div>

</body>
<?php

//Editing Data
if(isset($_POST["save"]))
{
  $newFullName = $_POST["FullName"];
  $newEmail = $_POST["Email"];
  $newPassword = $_POST["Password"];
  $data = array("FullName","$newFullName","Email","$newEmail","Password","$newPassword");
  editData("tbl_user", $data, "PK_ID", $id, $connect);
  redirectWindow("index.php");
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>