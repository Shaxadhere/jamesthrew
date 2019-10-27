<?php

require($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');

class loginModel{

    

    function login(string $email, string $password, $connect)
    {
        $query = "select * from tbl_User where Email = $email and Password = $password";
        mysqli_query(this->)
        mysqli_fetch_array();
    }
}


if(isset($_POST['btnLog']))
{
	$email = $_POST['Email'];
	$pass = $_POST['Password'];
	
	
	$obj = new myFunctions();
	
	$data = $obj->login($email,$pass);
	
	if($data!="")
	{
		$_SESSION['uid'] = $data[0];
		$_SESSION['uname'] = $data[1];
		echo "<script>window.location = 'dashboard.php';</script>";
	}
	else
	{
		echo "Invalid";
	}
}
?>