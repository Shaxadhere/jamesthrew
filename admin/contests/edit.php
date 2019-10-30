<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include($root.'/admin/contests/model.php');
$pageName = "Edit Contest";
getHeader($pageName, $root."/shared/adminheader.php");
$ID = $_GET["d"];
$contestModel =new contestModel();
$data = $contestModel->fetchInfo($ID);
$arr = mysqli_fetch_array($data);
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/contests/">Contest</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<div class='row'>
	<div class='col-md-12 grid-margin stretch-card'>
        <div class='card'>
            <div class='card-body'>
                <h6 class='card-title'>Edit Contest</h6>
				<form class='forms-sample' action='' method='post'>
                    <input type="hidden" value="<?= $arr['PK_ID']; ?>" name="PK_ID">
                    <div class='form-group'>
                        <label class='col-form-label'>Contest Name<span style='color:red'>*</span></label>
                        <input class='form-control' value='<?= $arr['ContestName']; ?>' maxlength='50' name='ContestName' id='defaultconfig' type='text' placeholder='Enter Contest Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Contest Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' name='ContestDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Contest Description..'><?= $arr['ContestDescription']; ?></textarea>
                    </div>
                    <div class='form-group'>
						<label>Submission Date<span style='color:red'>*</span></label>
						<input type='date' name='SubmissionDate' value='<?= $arr['SubmissionDate'] ?>' class='form-control col-4'>
                    </div>
                    <button type='submit' name='Save' class='btn btn-primary mr-2'>Save Changes</button>
                    <a href="details" class='btn btn-light'>Cancel</a>
            	</form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

$conne = mysqli_connect("localhost", "root", "123", "db_jamesthrew") or die("failed to connect to database");
if(isset($_POST['Save'])){
    $ConName = $_POST['ContestName'];
    $ConDescription = $_POST['ContestDescription'];
    $ConSubmissionDate = $_POST['SubmissionDate'];
    mysqli_query($conne, 'INSERT INTO `tbl_contest`(`PK_ID`, `ContestName`, `ContestDescription`, `SubmissionDate`, `Active`, `Deleted`) VALUES ($ConName, $ConDescription, $ConSubmissionDate, 1, 0)');
    redirectWindow('index');
}
getFooter($root.'/shared/adminfooter.php');
?>