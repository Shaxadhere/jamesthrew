<?php


class tipModel{
    function connect(){
        define("server_name", "localhost");
        define("user","root");
        define("pass","123");
        define("database","db_jamesthrew");
        $connection = mysqli_connect(server_name, user, pass, database) or die("failed to connect to database");
        return ($connection);
    }
    function fetch(){
        try{
            $table = "tbl_tips";
            return fetchData($table, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }

    function AddNew (string $TipName, string $TipDescription){
        try{
            $table = "tbl_tips";
            $fields = array("TipName", "TipDescription", "Active", "Deleted");
            $values = array($TipName, $TipDescription, 1, 0);
            insertData($table, $fields, $values, $this->connect());
            return true;
        }
        catch (exception $e) {
            return false;
        }
    }

    function fetchInfo($id){
        try{
            $table = "tbl_tips";
            return getInfo($table, "PK_ID", $id, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }

    function deleteInfo($id){
        try{
            $table = "tbl_tips";
            deleteData($table, "PK_ID", $id, $this->connect());
            return true;
        }
        catch(exception $e){
            return false;
        }
    }

  
}


?>