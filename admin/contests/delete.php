<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/contests/model.php');
if(isset($_POST['Delete'])){
    $ID = $_POST['PK_ID'];
    $contest = new contestModel();
    $res = $contest->deleteInfo($ID);
    if($res){
        redirectWindow('index');
    }
    else{
        showAlert('Something went wrong');
    }
}

?>