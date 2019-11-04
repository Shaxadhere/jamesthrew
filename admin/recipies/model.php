<?php
class recipeModel{
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
            $table = "tbl_Recipe";
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
            $data = array($ContestName, $ContestDescription, $SubmissionDate, 1, 0);
            return editData($table, $data, "PK_ID", $id, $this->connect());
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
    function getSteps($recipeID){
        try{
            $query = "select a.PK_ID, a.RecipeName, b.StepDescription from tbl_recipe as a JOIN tbl_steps as b on $recipeID = b.FK_RecipeSteps";
            mysqli_query($this->connect(), $query);
            return true;
        }
        catch(exception $e){
            return false;
        }
    }
}

?>