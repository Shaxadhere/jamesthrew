<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include($root.'/admin/contests/model.php');
$pageName = "Contests";
getHeader($pageName, $root."/shared/adminheader.php")
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
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="#" id="det" class="btn btn-primary" data-target="create">View Details</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
	</div>
</div>
<?php

if(isset($_POST['Create'])){
    AddNew();
}

?>

</div>
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script>
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


