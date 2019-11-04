<?php
class faqsModel{
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
            $table = "tbl_Faqs";
            return fetchData($table, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }

    function AddNew (string $Question, string $Answer){
        try{
            $table = "tbl_Faqs";
            $fields = array("Question", "Answer", "Active", "Deleted");
            $values = array($Question, $Answer, 1, 0);
            insertData($table, $fields, $values, $this->connect());
            return true;
        }
        catch (exception $e) {
            return false;
        }
    }
    function fetchInfo($id){
        try{
            $table = "tbl_Faqs";
            return getInfo($table, "PK_ID", $id, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }

    function editInfo(string $Question, string $Answer, $id){
        try{
            $table = "tbl_Faqs";
            $data = array("Question", $Question, "Answer", $Answer, "Active",  1, "Deleted", 0);
            editData($table, $data, "PK_ID", $id, $this->connect());
            return true;
        }
        catch(exception $e){
            return false;
        }
    }

    function deleteInfo($id){
        try{
            $table = "tbl_Faqs";
            deleteData($table, "PK_ID", $id, $this->connect());
            return true;
        }
        catch(exception $e){
            return false;
        }
    }
}

?>