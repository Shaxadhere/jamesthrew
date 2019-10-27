<?php

require($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');

class authModel{
    function login(string $email, string $password, $connect)
    {
        $query = "select * from tbl_User where Email = $email and Password = $password";
        return mysqli_fetch_array(mysqli_query($connect, $query));
    }
}

?>