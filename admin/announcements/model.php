<?php
class announcemtModel{
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
            $table = "tbl_Announcement";
            return fetchData($table, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }
    function AddNew(string $AnnouncementName, string $AnnouncementDescription, $FK_UserAnnouncement){
        try{
            $table = "tbl_Announcement";
            $fields = array("AnnouncementName", "AnnouncementDescription", "FK_UserAnnouncement", "Active", "Deleted");
            $values = array($AnnouncementName, $AnnouncementDescription, $FK_UserAnnouncement, 1, 0);
            insertData($table, $fields, $values, $this->connect());
            return true;
        }
        catch (exception $e) {
            return false;
        }
    }
    function fetchInfo($id){
        try{
            $table = "tbl_Announcement";
            return getInfo($table, "PK_ID", $id, $this->connect());
        }
        catch(exception $e){
            return false;
        }
    }
    function editInfo(string $AnnouncementName, string $AnnouncementDescription, $FK_UserAnnouncement, $id){
        try{
            $table = "tbl_Announcement";
            $data = array("AnnouncementName", $AnnouncementName, "AnnouncementDescription", $AnnouncementDescription, "FK_UserAnnouncement", $FK_UserAnnouncement, "Active",  1, "Deleted", 0);
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