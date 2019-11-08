<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jamesthrew.com</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/core/core.css">
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/css/demo_2/style.css">
  	<link rel="apple-touch-icon" sizes="180x180" href="/jamesthrew/assets/dashboard/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/jamesthrew/assets/dashboard/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/jamesthrew/assets/dashboard/assets/favicon//favicon-16x16.png">
    <style>
    .centered_div {
        width: Xu;
        height: Yu;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -(X/2)u;
        margin-top: -(Y/2)u;
}
    </style>
</head>
<body>
	<div class="centered_div">
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Redirecting...
    </div>

	<script src="/jamesthrew/assets/dashboard/assets/vendors/core/core.js"></script>
  	<script src="/jamesthrew/assets/dashboard/assets/vendors/progressbar.js/progressbar.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/template.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/dashboard.js"></script>
</body>

</html>    

<?php

session_start();
if(isset($_SESSION)){
$user = $_SESSION['User'];
if(isset($user))
	if($user['FK_UserType']==1){
		echo "<script>setTimeout(function() { Redirect(); }, 1000);</script>";
	}
	else if($user['FK_UserType']==2){
		echo "<script>setTimeout(function() { RedirectUser(); }, 1000);</script>";
	}
	else{
		echo "<script>window.location.href='/jamesthrew/auth/login'</script>";
	}
}
?>
<script>

function Redirect(){
	window.location.href='/jamesthrew/admin/';
}
function RedirectUser(){
	window.location.href='/jamesthrew/user0/';
}

</script>