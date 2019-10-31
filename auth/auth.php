<?php
require($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
require('model.php');
session_start();
if(isset($_POST['Login']))
{
	$email = $_POST['Email'];
	$pass = $_POST['Password'];
	$auth = new authModel();
	$cred = $auth->login($email, $pass);
	if(isset($cred))
	{
		if($user['FK_UserType'] = 1){
			$_SESSION['User'] = array($email, $pass);
			header("location: redirect");
		}
		else if($user['FK_UserType'] = 2){
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