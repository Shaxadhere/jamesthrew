<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
class contestModel{
    function create(string $ContestName, string $ContestDescription, $SubmissionDate, $connection){
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