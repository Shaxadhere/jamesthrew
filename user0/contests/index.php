<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include($root.'/admin/contests/model.php');
$pageName = "Contests";
getHeader($pageName, $root."/shared/adminheader.php");
$listing =new contestModel();
$list = $listing->fetch();
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
    	<div class="card">
        	<div class="card-body">
			<a href="#" id="det" class="btn btn-primary" data-target="create">Add New</a>
			<br>
			<br>
            	<h6 class="card-title">All Contests</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Contest Name</th>
                        <th>Contest Description</th>
                        <th>Submission Date</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="mon">
					<?php
					while($arr = mysqli_fetch_array($list))
					{
						echo "
						<tr>
                        	<td>$arr[ContestName]</td>
                        	<td>$arr[ContestDescription]</td>
                        	<td>$arr[SubmissionDate]</td>
                        	<td><a href='#' id='det' class='btn btn-primary' data-href='$arr[PK_ID]' data-target='create?$arr[PK_ID]'>View Details</a></td>
                      	</tr>
						";
					}
					?>
                      
                    </tbody>
                  </table>
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
if(isset($_POST['Save'])){
	$$ContestName = $_POST['ContestName'];
	$ContestDescription = $_POST['ContestDescription'];
	$SubmissionDate = $_POST['SubmissionDate'];
}
?>

</div>
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script>
	$(document).ready(function(){
		var trigger = $('#mon tr td a'),
			container = $('#contentt');
		trigger.on('click', function(){
    		var PK_ID = trigger.attr('data-href');
			//document.getElementById('#editID').attr('value');
			var $this = $(this)
			target = $this.data('target');
			container.load(target);
			return false;
		})
	})

	$(document).ready(function(){
		var trigger = $('#mon tr td a'),
			container = $('#contentt');
		trigger.on('click', function(){
    		var PK_ID = trigger.attr('data-href');
			//document.getElementById('#editID').attr('value');
			var $this = $(this)
			target = $this.data('target');
			container.load(target);
			return false;
		})
	})

	$(document).ready(function(){
		var trigger = $('#det'),
			container = $('#contentt');
		trigger.on('click', function(){
			var $this = $(this)
			target = $this.data('target');
			container.load(target);
			return false;
		})
	})
</script>
<?php
getFooter($root.'/shared/adminfooter.php');
?>


