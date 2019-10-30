<?php
class faqsModel{
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
}

?>