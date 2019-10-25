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
$id = $_GET["id"];
$query = mysqli_query($connect, "select * from `tbl_user` where PK_ID = $id");
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

  <a href="edit.php?id=<?php echo $id ?>" class="btn btn-primary">Edit</a>
  
  <a href="delete.php?id=<?php echo $id ?>" class="btn btn-primary">Delete</a>

</form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>