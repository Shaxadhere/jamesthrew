<?php

//App Info//
$AppName = "JamesThrew";
$PageName = "";

//Including Fuctions//
include('../functions/main.php');

//Connection
define("server_name", "localhost");
define("user","root");
define("pass","123");
define("database","db_jamesthrew");
$connect = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");

?>