<?php

//Defining Application Root//
$root = $_SERVER['DOCUMENT_ROOT'].'/jamesthrew';

//Including Fuctions//
include($root.'/functions/main.php');


class neo{
    function connection(){
        define("server_name", "localhost");
        define("user","root");
        define("pass","123");
        define("database","db_jamesthrew");
        $connect = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");
    }
}


?>