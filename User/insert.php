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

?>
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="FullName" class="form-control" placeholder="Enter Full Name">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="Email" class="form-control" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control" placeholder="Enter Password">
  </div>

  <button type="submit" name="insert" class="btn btn-primary">Save</button>
</form>
</div>

</body>
<?php


if(isset($_POST["insert"]))
{
  $FullName = $_POST["FullName"];
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $table = "tbl_user";
  $fields = array("FullName", "Email", "Password");
  $values = array($FullName, $Email, $Password);
  insertData($table, $fields, $values, $connect);
  redirectWindow("index.php");
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>