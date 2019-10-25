<?php

define("server_name", "localhost");
define("user","root");
define("pass","");
define("database","aroma");
$connect = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");

?>