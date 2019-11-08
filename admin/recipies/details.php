<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/recipies/model.php');
$pageName = "Details";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
$ID = $_GET["d"];
$recipeModel =new recipeModel();
$data = $recipeModel->fetchInfo($ID);
$arr = mysqli_fetch_array($data);
$result = $recipeModel->getSteps($ID);
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jamesthrew/admin/contests/">Recipes</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<div class='row'>
	<div class='col-md-12 grid-margin stretch-card'>
        <div class='card'>
            <div class='card-body'>
                <h6 class='card-title'>Recipe Details</h6>
				        <form class='forms-sample' action='' method='post'>
                    <div class='form-group'>
                        <label class='col-form-label'>Recipe Name<span style='color:red'>*</span></label>
                        <input class='form-control' value='<?= $arr['RecipeName']; ?>' maxlength='50' name='RecipeName' disabled id='defaultconfig' type='text' placeholder='Enter Recipe Name..'>
                    </div>
                    <div class='form-group'>
                    <a href="steps?d=<?= $arr['PK_ID']; ?>" class="btn btn-info">
	                    View Recipe Steps <span class="badge badge-light"><?= mysqli_num_rows($result); ?></span>
                    </a>
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
