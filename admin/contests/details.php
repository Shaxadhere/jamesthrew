<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/contests/model.php');
$pageName = "Details";
session_start();
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
                <h6 class='card-title'>Contest Details</h6>
				<form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Contest Name<span style='color:red'>*</span></label>
                        <input class='form-control' value='<?= $arr['ContestName']; ?>' maxlength='50' name='ContestName' disabled id='defaultconfig' type='text' placeholder='Enter Contest Name..'>
                    </div>
                    <div class='form-group'>
						<label for='exampleFormControlTextarea1'>Contest Description<span style='color:red'>*</span></label>
						<textarea class='form-control' maxlength='1000' disabled name='ContestDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Contest Description..'><?= $arr['ContestDescription']; ?></textarea>
                    </div>
                    <div class='form-group'>
						<label>Submission Date<span style='color:red'>*</span></label>
						<input type='date' name='SubmissionDate' value='<?= $arr['SubmissionDate'] ?>' disabled class='form-control col-4'>
                    </div>
                    
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
        <h5 class="modal-title" id="exampleModalLabel">Delete Contest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this contest?
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
