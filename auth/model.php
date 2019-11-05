<?php

class authModel{
    function connect(){
        define("server_name", "localhost");
        define("user","root");
        define("pass","123");
        define("database","db_jamesthrew");
        $connection = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");
        return ($connection);
    }
    function login(string $email, string $password)
    {
        $query = "select * from tbl_User where Email = '$email' and Password = '$password'";
        $res = mysqli_query($this->connect(), $query);
        return $res;
    }
    function logout(){
        session_destroy();
        header("location: /jamesthrew/");
    }
}

?>