<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
require('auth.php');
$pageName = "Dashboard";
getHeader($pageName, $root."/shared/adminheader.php");
$user = $_SESSION['User'];
?>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to <?php echo $pageName; echo $user[0]."<br>".$user[1]; ?></h4>
  </div>
</div>
<?php
getFooter($root.'/shared/adminfooter.php');
?>


