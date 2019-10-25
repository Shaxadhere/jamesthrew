<?php

$AppName = "Aroma";
$PageName = "";

//Including Fuctions//
include('Functions/main.php');

//Connection
define("server_name", "localhost");
define("user","root");
define("pass","");
define("database","db_jamesthrew");
$connect = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");

?>