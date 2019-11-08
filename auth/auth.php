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
		$_SESSION['User'] = $cred;
		if($cred['FK_UserType'] == 1){
			if(!empty($return)){
				header("location: $return");	
			}
			else{
				header("location: redirect");
			}
		}
		else if($cred['FK_UserType'] == 2){
			if(!empty($return)){
				header("location: $return");	
			}
			else{
				header("location: redirect");
			}
		}
	}
	else
	{
		session_destroy();
		header("location: login?status=false");
	}
}

?>