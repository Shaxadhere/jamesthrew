<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
if(empty($_SESSION['User'])){
    $url = $_SERVER['REQUEST_URI'];
    if(!empty($url)){
        redirectWindow('/jamesthrew/auth/login?return='.$url);
    }
    else{
        redirectWindow('/jamesthrew/auth/login');
    }
}
?>