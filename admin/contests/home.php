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