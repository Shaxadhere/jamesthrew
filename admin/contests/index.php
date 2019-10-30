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
<?php include('home.php') ?>
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

	//ViewDetails
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
	//AddNew
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

	//Create New AJax
	function createNew() {
		var data = "<div class='row'>"+
			"<div class='col-md-12 grid-margin stretch-card'>"+
        		"<div class='card'>"+
            	"<div class='card-body'>"+
                "<h6 class='card-title'>Add New Contest</h6>"+
				"<form class='forms-sample' action='' method='post'>"+
                "<div class='form-group'>"+
	            "<label class='col-form-label'>Contest Name<span style='color:red'>*</span></label>"+
                "<input class='form-control' maxlength='50' name='ContestName' value='<?php echo 'hello';?> ' id='defaultconfig' type='text' placeholder='Enter Contest Name..'>"+
                "</div>"+
                "<div class='form-group'>"+
				"<label for='exampleFormControlTextarea1'>Contest Description<span style='color:red'>*</span></label>"+
				"<textarea class='form-control' maxlength='1000' name='ContestDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Contest Description..'></textarea>"+
                "</div>"+
                "<div class='form-group'>"+
				"<label>Submission Date<span style='color:red'>*</span></label>"+
				"<input type='date' name='SubmissionDate' class='form-control col-4'>"+
                "</div>"+
                "<button type='submit' name='Create' class='btn btn-primary mr-2'>Submit</button>"+
                "<a id='cancel' href='index' class='btn btn-light' data-target=''>Cancel</a>"+
            	"</form>"+
            	"</div>"+
        		"</div>"+
    		"</div>"+
		"</div>";
  		$("#contentt").empty().append(data);
	}
	function showTable() {
		var data = "<div class='row'>"+
		"<div class='col-md-12 grid-margin stretch-card'>"+
    	"<div class='card'>"+
    	"<div class='card-body'>"+
		"<button type='button' onclick='createNew()' class='btn btn-primary'>Add New</button>"+
		"<br>"+
		"<br>"+
        "<h6 class='card-title'>All Contests</h6>"+
        "<div class='table-responsive'>"+
        "<table id='dataTableExample' class='table'>"+
        "<thead>"+
        "<tr>"+
        "<th>Contest Name</th>"+
        "<th>Contest Description</th>"+
        "<th>Submission Date</th>"+
        "<th></th>"+
        "</tr>"+
        "</thead>"+
        "<tbody id='mon'>"+
		<?php
		while($arr = mysqli_fetch_array($list))
		{
		echo "
		<tr>
        <td>$arr[ContestName]</td>
        <td>$arr[ContestDescription]</td>
        <td>$arr[SubmissionDate]</td>
        <td><a href='#' id='det' class='btn btn-primary' data-href='$arr[PK_ID]' data-target='details?$arr[PK_ID]'>View Details</a></td>
        </tr>
		";
		}
		?>
        "</tbody>"+
       	"</table>"+
        "</div>"+
		"</div>"+
		"</div>"+
		"</div>";
  		$("#contentt").empty().append(data);
	}
	function editData(id){
		var data = "<div class='row'>"+
		"<div class='col-md-12 grid-margin stretch-card'>"+
        "<div class='card'>"+
        "<div class='card-body'>"+
        "<h6 class='card-title'>Edit Contest</h6>"+
		"<form class='forms-sample' action='' method='post'>"+
        "<input type='hidden' name='PK_ID' value=''>"+
        "<div class='form-group'>"+
        "<label class='col-form-label'>Contest Name<span style='color:red'>*</span></label>"+
        "<input class='form-control' disabled value='<?php echo '$ContestName' ?>' maxlength='50' name='ContestName' id='defaultconfig' type='text' placeholder='Enter Contest Name..'>"+
        "</div>"+
        "<div class='form-group'>"+
		"<label for='exampleFormControlTextarea1'>Contest Description<span style='color:red'>*</span></label>"+
		"<textarea class='form-control' disabled maxlength='1000' name='ContestDescription' id='defaultconfig' id='exampleFormControlTextarea1' rows='10' placeholder='Enter Contest Description..'></textarea>"+
        "</div>"+
        "<div class='form-group'>"+
		"<label>Submission Date<span style='color:red'>*</span></label>"+
		"<input type='date' disabled name='SubmissionDate' class='form-control col-4'>"+
        "</div>"+
        "<a id='det' href='#' data-target='edit' class='btn btn-light'>Edit</a>"+
        "<a id='det' href='index' class='btn btn-light'>Cancel</a>"+
        "</form>"+
        "</div>"+
        "</div>"+
    	"</div>"+
		"</div>";
		$("#contentt").empty().append(data);
	}
	
</script>
<?php
getFooter($root.'/shared/adminfooter.php');
?>


