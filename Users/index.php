<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<center>
<h3>All Users</h3>
</center>
<div class="container">
<table class="table table-hover">
  <thead>
  <tr>
      <th><a class="btn btn-primary" href='insert.php'>Add</a></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
    include('../Models/config.php');
    $ft = mysqli_query($connect,"SELECT * FROM `tbl_user`");
	    while($arr = mysqli_fetch_array($ft))
		{			
			echo "<tr>
			
					<td>  $arr[FullName]	</td>
					<td>  $arr[Email]	</td>
          <td>  $arr[Password]	</td>
          <td><a class='btn btn-success' href='edit.php?id=$arr[PK_ID]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id=$arr[PK_ID]'>Delete</a> | <a class='btn btn-primary' href='details.php?id=$arr[PK_ID]'>Details</a></td>
			
				  </tr>";
        }
        ?>
    </tr>
  </tbody>
</table>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>
