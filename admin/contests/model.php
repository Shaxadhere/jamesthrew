<?php
class contestModel{
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
            $table = "tbl_Contest";
            return fetchData($table, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }
    function AddNew(string $ContestName, string $ContestDescription, $SubmissionDate){
        try{
            $table = "tbl_Contest";
            $fields = array("ContestName", "ContestDescription", "SubmissionDate", "Active", "Deleted");
            $values = array($ContestName, $ContestDescription, $SubmissionDate, 1, 0);
            insertData($table, $fields, $values, $this->connect());
            return true;
        }
        catch (exception $e) {
            return false;
        }
    }
    function fetchInfo($id){
        try{
            $table = "tbl_Contest";
            return getInfo($table, "PK_ID", $id, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }
    function editInfo(string $ContestName, string $ContestDescription, $SubmissionDate, $id){
        try{
            $table = "tbl_Contest";
            $data = array("ContestName", $ContestName, "ContestDescription", $ContestDescription, "SubmissionDate", $SubmissionDate, "Active",  1, "Deleted", 0);
            editData($table, $data, "PK_ID", $id, $this->connect());
            return true;
        }
        catch(exception $e){
            return false;
        }
    }
    function deleteInfo($id){
        try{
            $table = "tbl_Contest";
            deleteData($table, "PK_ID", $id, $this->connect());
            return true;
        }
        catch(exception $e){
            return false;
        }
    }
}

?>