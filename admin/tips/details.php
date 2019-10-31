<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include($root.'/admin/tips/model.php');
$pageName = "Add New";
getHeader($pageName, $root."/shared/adminheader.php");
$ID = $_GET["d"];
$tipModel = new tipModel();
$data = $tipModel->fetchInfo($ID);
$arr = mysqli_fetch_array($data);

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
                <h6 class='card-title'>Tip Details</h6>
				<form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Tip Name<span style='color:red'>*</span></label>
                        <input class='form-control' value='<?= $arr['TipName']; ?>' maxlength='50' name='TipName' disabled id='defaultconfig' type='text' placeholder='Enter Tip Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Tip Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' disabled name='TipDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Tip Description..'><?= $arr['TipDescription']; ?></textarea>
                    <a href="edit?d=<?= $arr['PK_ID']; ?>" class='btn btn-primary mr-2'>Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                    <a href='index' class='btn btn-light'>Cancel</a>
            	</form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Tip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this Tip?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="delete" method="post">
            <input type="hidden" name="PK_ID" value="<?= $arr['PK_ID'] ?>">
            <button type="submit" name="Delete" class="btn btn-danger">Yes Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
getFooter($root.'/shared/adminfooter.php');
?>