<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/contests/model.php');
$pageName = "Add New";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
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
                <h6 class='card-title'>Add New Contest</h6>
				<form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Contest Name<span style='color:red'>*</span></label>
                        <input class='form-control' maxlength='50' name='ContestName' id='defaultconfig' type='text' placeholder='Enter Contest Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Contest Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' name='ContestDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Contest Description..'></textarea>
                    </div>
                    <div class='form-group'>
						<label>Submission Date<span style='color:red'>*</span></label>
						<input type='date' name='SubmissionDate' class='form-control col-4'>
                    </div>
                    <button type='submit' name='Create' class='btn btn-primary mr-2'>Submit</button>
                    <a href='index' class='btn btn-light'>Cancel</a>
            	</form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
$create = new contestModel();
if(isset($_POST['Create'])){
	$ContestName = $_POST['ContestName'];
	$ContestDescription = $_POST['ContestDescription'];
	$SubmissionDate = $_POST['SubmissionDate'];
	$res = $create->AddNew($ContestName, $ContestDescription, $SubmissionDate);
	if($res){
		redirectWindow('index');
	}
	else{
		showAlert("Something went wrong");
	}
}
?>
<?php
getFooter($root.'/shared/adminfooter.php');
?>