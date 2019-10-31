<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include($root.'/admin/faqs/model.php');
if(isset($_POST['Delete'])){
    $ID = $_POST['PK_ID'];
    $faq = new faqsModel();
    $res = $faq->deleteInfo($ID);
    if($res){
        redirectWindow('index');
    }
    else{
        showAlert('Something went wrong');
    }
}

?>