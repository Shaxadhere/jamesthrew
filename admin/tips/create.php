<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/tips/model.php');
$pageName = "Add New";
getHeader($pageName, $root."/shared/adminheader.php");
?>


<nav class="page-breadcrumb">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/faqs/">Tip</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>

<div id="contentt">
<div class='row'>
	<div class='col-md-12 grid-margin stretch-card'>
        <div class='card'>
            <div class='card-body'>
                <h6 class='card-title'>Add New Tips</h6>
				<form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Tip Name <span style='color:red'>*</span></label>
                        <input class='form-control' maxlength='50' name='TipName' id='defaultconfig' type='text' placeholder='Enter Tip Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Tip Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' name='TipDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Tip Description..'></textarea>
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
$create = new tipModel();
if(isset($_POST['Create'])){
	$TipName = $_POST['TipName'];
	$TipDescription = $_POST['TipDescription'];
	$res = $create->AddNew($TipName, $TipDescription);
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