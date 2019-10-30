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
		$_SESSION['User'] = $cred;
		header("location: redirect");
	}
	else
	{
		showAlert('Invalid Credentials');
	}
}

?>