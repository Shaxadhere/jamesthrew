<?php
class contestModel{
    function fetch($connection){
        try{
            $table = "tbl_Contest";
            return fetchData($table, $connection);
        }
        catch(exception $e){
            return false;
        }
    }
    function AddNew(string $ContestName, string $ContestDescription, $SubmissionDate, $connection){
        try{
            $table = "tbl_Contest";
            $fields = array("ContestName", "ContestDescription", "SubmissionDate", "Active", "Deleted");
            $values = array($ContestName, $ContestDescription, $SubmissionDate, 1, 0);
            insertData($table, $fields, $values, $connection);
            return true;
        }
        catch (exception $e) {
            return false;
        }
    }
}

?>