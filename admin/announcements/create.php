<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/announcements/model.php');
$pageName = "Add New";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/contests/">Announcements</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<div class='row'>
	<div class='col-md-12 grid-margin stretch-card'>
        <div class='card'>
            <div class='card-body'>
                <h6 class='card-title'>Add New Announcement</h6>
				<form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Announcement Name<span style='color:red'>*</span></label>
                        <input class='form-control' maxlength='50' name='AnnouncementName' id='defaultconfig' type='text' placeholder='Enter Announcement Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Announcement Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' name='AnnouncementDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Announcement Description..'></textarea>
                    </div>
                    <div class='form-group'>
						<label>Winner</label>
                        <input class='form-control' maxlength='50' name='FK_UserAnnouncement' id='defaultconfig' type='email' placeholder='Enter Winner Email..'>
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
$create = new announcemtModel();
if(isset($_POST['Create'])){
	$AnnouncementName = $_POST['AnnouncementName'];
	$AnnouncementDescription = $_POST['AnnouncementDescription'];
	$res = $create->AddNew($AnnouncementName, $AnnouncementDescription, 1);
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