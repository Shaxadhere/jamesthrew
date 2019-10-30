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
		var trigger = $('#cancel'),
			container = $('#contentt');
		trigger.on('click', function(){
    		var PK_ID = trigger.attr('data-href');
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


