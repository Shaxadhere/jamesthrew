<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/faqs/model.php');
$pageName = "Edit Faqs";
getHeader($pageName, $root."/shared/adminheader.php");
$ID = $_GET["d"];
$faqsModel =new faqsModel();
$data = $faqsModel->fetchInfo($ID);
$arr = mysqli_fetch_array($data);
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/faqs/">Faqs</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<div class='row'>
	<div class='col-md-12 grid-margin stretch-card'>
        <div class='card'>
            <div class='card-body'>
                <h6 class='card-title'>Edit Faqs</h6>
				<form class='forms-sample' action='' method='post'>
                    <input type="hidden" value="<?= $arr['PK_ID']; ?>" name="PK_ID">
                    <div class='form-group'>
                        <label class='col-form-label'>Question<span style='color:red'>*</span></label>
                        <input class='form-control' value='<?= $arr['Question']; ?>' maxlength='50' name='Question' id='defaultconfig' type='text' placeholder='Enter Question..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Answer<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' name='Answer' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Answer..'><?= $arr['Answer']; ?></textarea>
                    </div>
                    <input type='submit' name='btnSave' class='btn btn-primary mr-2' value="Save Changes">
                    <a href="index" class='btn btn-light'>Cancel</a>
            	</form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
$edit = new faqsModel();
if(isset($_POST['btnSave'])){
    $Question = $_POST['Question'];
    $Answer = $_POST['Answer'];
    $newID = $_POST['PK_ID'];
    $res = $edit->editInfo($Question, $Answer, $newID);
    if($res){
       redirectWindow('index');
    }
    else{
        showAlert('Something Went Wrong');
    }

}
getFooter($root.'/shared/adminfooter.php');
?>