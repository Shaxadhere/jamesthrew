<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/recipies/model.php');
$pageName = "Recipe Steps";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
$ID = $_GET["d"];
$recipeModel =new recipeModel();
$data = $recipeModel->fetchInfo($ID);
$arr = mysqli_fetch_array($data);
$result = $recipeModel->getSteps($ID);
//$st = mysqli_fetch_array($result);
//echo showAlert($st[1]);
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
                <h6 class='card-title'>Recipe Steps</h6>
				    <form class='forms-sample' action='' method='post'>
                    <input type="hidden" value="<?= $arr[0] ?>" name="FK_RecipeSteps">
                    <div class="form-group">
                        <?php 
                        while($val = mysqli_fetch_array($result))
                        {
                            $count = 1;
                            echo "
                            <div id='steps'>
                            <div class='form-group' id='desc$count' data-href='$count'>
                            <label for='exampleInputText1'>Step $count</label>
                            <button type='button' onClick='dltStepDiv($count)' class='badge badge-danger' style='float:right'>Delete Step</button>
                            <textarea id='maxlength-textarea' class='form-control' maxlength='1000' name='steps[]' rows='4' placeholder='Enter Step Description.' required>$val[2]</textarea>
                            </div>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <button type="button" id="addSteps" class='btn btn-primary mr-2'>Add Step</button>
                    <button type="button" href="edit?d=<?= $arr['PK_ID']; ?>" class='btn btn-primary mr-2'>Save Changes</button>
                    <a href='index' class='btn btn-light'>Close</a>
            	</form>
            </div>
        </div>
    </div>
</div>
</div> 
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script>
var counts = 2;
$(document).ready(function(){
  $("#addSteps").click(function(){
    $("#steps").append("<div class='form-group' id='desc"+counts+"'><label for='exampleInputText1'>Step "+counts+"</label><button type='button' id='dltStep' class='badge badge-danger' style='float:right'>Delete Step</button><textarea  id='maxlength-textarea' class='form-control' maxlength='1000' name='steps[]' rows='4' placeholder='Enter Step Description.' required></textarea></div>");
    counts++;
    });
});
function dltStepDiv(id){
    var div = $('desc'+id);
    $(div).remove();
}
</script>
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
