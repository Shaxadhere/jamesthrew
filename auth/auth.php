<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once('model.php');
session_start();
if(isset($_POST['Login']))
{
	$email = $_POST['Email'];
	$pass = $_POST['Password'];
	$return = $_POST['return'];
	$auth = new authModel();
	$cred = mysqli_fetch_array($auth->login($email, $pass));
	if(isset($cred))
	{
		showAlert("UserFound");
		if($cred['FK_UserType'] == 1){
			$_SESSION['User'] = $cred;
			//if(!empty($return)){
			//	header("location: redirect");	
			//}
			showAlert("Admin");
			header("location: redirect");
		}
		else if($cred['FK_UserType'] == 2){
			showAlert("User");
		}
	}
	else
	{
		session_destroy();
		showAlert('Invalid Credentials');
	}
}

?>