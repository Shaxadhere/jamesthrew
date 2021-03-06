<?php
class tipModel{
    function connect(){
        $server = "localhost";
        $username = "root";
        $password= "123";
        $database = "db_jamesthrew";
        $connection = mysqli_connect($server, $username, $password, $database) or die("failed to connect to database");
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

    function editInfo(string $TipName, string $TipDescription, $id){
        try{
            $table = "tbl_tips";
            $data = array("TipName", $TipName, "tipDescription", $TipDescription, "Active",  1, "Deleted", 0);
            editData($table, $data, "PK_ID", $id, $this->connect());
            return true;
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