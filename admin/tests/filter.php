<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "123", "db_jamesthrew");
$request = mysqli_real_escape_string($connect, $_GET["query"]);
$query = "SELECT * FROM tbl_User WHERE Email LIKE '%".$request."%'";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["Email"];
 }
 echo json_encode($data);
}

?>
