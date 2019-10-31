<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
$pageName = "Tips";
getHeader($pageName, $root."/shared/adminheader.php");

include($root.'/admin/tips/model.php');
$pageName = "Tip";
$listing =new tipModel();
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
			<!--<a href="#" id="det" class="btn btn-primary" data-target="create">Add New</a>-->
			<a href="create" id="det" class="btn btn-primary">Add New</a>
			<br>
			<br>
            	<h6 class="card-title">All FAQS</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Tip Name</th>
                        <th>Tip Description</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="mon">
					<?php

					while($arr = mysqli_fetch_array($list))
					{
						echo "
						<tr>
                        	<td>$arr[TipName]</td>
                        	<td>$arr[TipDescription]</td>
                        	<td><a href='details?d=$arr[PK_ID]' class='btn btn-primary'>View Details</a></td>
                      	</tr>
						";
					}
					?>


<?php
$create = new tipModel();
if(isset($_POST['Create'])){
	$TipName = $_POST['TipName'];
	$TipDescription  = $_POST['TipDescription'];
	
	$res = $create->AddNew($TipName, $TipDescription);
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

                      
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
	</div>
</div>










<?php
getFooter($root.'/shared/adminfooter.php');
?>


