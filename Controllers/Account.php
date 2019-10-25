<?php

//Including Modal//
include('../Models/config.php');

//Including Functions//
include('../Functions/main.php');

//Registering User//
if(isset($_POST["signup"]))
{
 $FullName = $_POST["FullName"];
 $Email = $_POST["Email"];
 $Password = $_POST["Password"];
 $table = "tbl_User";
 $fields = array("FullName", "Email", "Password");
 $values = array($FullName, $Email, $Password);
 $result = insertData($table, $fields, $values,$connect);
 header('login.php');
}

?>