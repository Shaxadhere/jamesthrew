<?php
require($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
require('model.php');
if(isset($_POST['btnlog']))
{
	$email = $_POST['Email'];
	$pass = $_POST['Password'];
	$auth = new authModel();
	$cred = $auth->login($email, $pass, $connect);
	if(!isset($cred))
	{
		$_SESSION['User'] = $cred;
		redirectWindow($root.'/jamesthrew/admin');
	}
	else
	{
		echo "";
	}
}

?>