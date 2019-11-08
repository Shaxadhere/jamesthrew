<?php

//Defining Application Root//
$root = $_SERVER['DOCUMENT_ROOT'].'/jamesthrew';

//Including Fuctions//
include_once($root.'/functions/main.php');

class connection{
    function connect(){
        define("server", "localhost");
        define("usr","root");
        define("pas","123");
        define("data","db_jamesthrew");
        $connection = mysqli_connect(server, usr, pas, data) or die("failed to connect to database");
        return ($connection);
    }
}

//error reporting//
//error_reporting(0);
?>