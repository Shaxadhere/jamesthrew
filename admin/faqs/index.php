<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/faqs/model.php');
$pageName = "FAQs";
getHeader($pageName, $root."/shared/adminheader.php");
$listing = new faqsModel();
$list = $listing->fetch();
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/jamesthrew/admin/">Dashboard</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>

<div id="contentt">
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
    	<div class="card">
        	<div class="card-body">
			<!--<a href="#" id="det" class="btn btn-primary" data-target="create">Add New</a>-->
			<a href="create" id="det" class="btn btn-primary">Add New</a>
			<br>
			<br>
            	<h6 class="card-title">All FAQS</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Quations</th>
                        <th>Answers</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="mon">
					<?php

					while($arr = mysqli_fetch_array($list))
					{
						echo "
						<tr>
                        	<td>$arr[Question]</td>
                        	<td>$arr[Answer]</td>
                        	<td><a href='details?d=$arr[PK_ID]' class='btn btn-primary'>View Details</a></td>
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
$create = new faqsModel();
if(isset($_POST['Create'])){
	$Question = $_POST['Question'];
	$Answer  = $_POST['Answer'];
	
	$res = $create->AddNew($Question, $Answer);
	if($res){
		redirectWindow('index');
	}
	else{
		showAlert("Something went wrong");
	}
}
if(isset($_POST['Save'])){
	$Question = $_POST['Question'];
	$Answer = $_POST['Answer'];

}
?>








<?php
getFooter($root.'/shared/adminfooter.php');
?>


