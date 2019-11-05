<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
include_once($root.'/admin/announcements/model.php');
$pageName = "Announcements";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
$listing =new announcemtModel();
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
			<a href="create" id="det" class="btn btn-primary">Add New</a>
			<br>
			<br>
            	<h6 class="card-title">All Announcements</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Announcements Name</th>
                        <th>Announcements Description</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="mon">
					<?php
					while($arr = mysqli_fetch_array($list))
					{
						echo "
						<tr>
                        	<td>$arr[AnnouncementName]</td>
                        	<td>".substr("$arr[AnnouncementDescription]",0,80)."...</td>
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
</div>
<?php
getFooter($root.'/shared/adminfooter.php');
?>


