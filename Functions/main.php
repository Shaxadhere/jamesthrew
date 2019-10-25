<?php

//Calling Header//
function getHeader(string $link){
    include($link);
}

//Calling Header//
function getFooter(string $link){
    include($link);
}

//Redirecting//
function redirectWindow(string $url)
{
    echo "<script>window.location.href='$url';</script>";
}

//Insert Data//
function insertData(string $table,array $fields,array $values,$conn){
    //Managing Fields//
    $quote = '';
    $c = 0;
    foreach ($fields as $item) {
        $quote.="`$item`";
        $c++;
        if($c < count($fields))
        {
            $quote.=',';
        }
    }
    //Managing Values//
    $valQuote = '';
    $valc = 0;
    foreach ($values as $item) {
        $valQuote.="'$item'";
        $valc++;
        if($valc < count($fields))
        {
            $valQuote.=',';
        }
    }
    //Making Query//
    $query = "insert into `$table` (".$quote.") values (".$valQuote.")";
    mysqli_query($conn, $query);
}

//Fetching Data//
function fetchData(string $table, $conn){
    $query = "select * from `".$table."`";
    return mysqli_query($conn, $query);
}

//Getting Info//
function getInfo(string $table, string $PrimaryKey, $id, $conn){
    $query = "select * from `$table` where $PrimaryKey = $id";
    return mysqli_query($conn, $query);
}

//Deleting Data//
function deleteData(string $table, string $PrimaryKey, $id, $conn){
    $query = "DELETE FROM `$table` WHERE $PrimaryKey = $id";
    mysqli_query($conn, $query);
}

//Editing Data//
function editData(string $table, array $data, string $PrimaryKey, $id, $conn){
    //Managing Data
    $ini = '';
    $c = 0;
    $mm = count($data);
    foreach($data as $item){
        $c++;
        if($mm % 2 == 0){
            $ini .= "`$item`=";
        }
        if($mm % 2 != 0){
            $ini .= "'$item'";
        }
        if($mm % 2 != 0 && $c < count($data))
        {
            $ini.=',';
        }
        if($c == count($data)){
            $ini .= '';
        }
        $mm--;
    }
    $query = "UPDATE `$table` SET $ini WHERE $PrimaryKey = $id";
    mysqli_query($conn, $query);
}

?>