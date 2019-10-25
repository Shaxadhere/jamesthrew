<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


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
    include('../Functions/main.php');
    
    $ft = fetchData("tbl_user", $connect);
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
