<?php
include($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/admin/contests/model.php');
$pageName = "Contests";
?>
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Edit Contest</h6>
				<form class="forms-sample" action="" method="post">
                    <input type="hidden" name="PK_ID" value="">
                    <div class="form-group">
                        <label class="col-form-label">Contest Name<span style="color:red">*</span></label>
                        <input class="form-control" value="<?php echo "$ContestName" ?>" maxlength="50" name="ContestName" id="defaultconfig" type="text" placeholder="Enter Contest Name..">
                    </div>
                    <div class="form-group">
						<label for="exampleFormControlTextarea1">Contest Description<span style="color:red">*</span></label>
						<textarea class="form-control" maxlength="1000" name="ContestDescription" id="defaultconfig" id="exampleFormControlTextarea1" rows="10" placeholder="Enter Contest Description.."></textarea>
                    </div>
                    <div class="form-group">
						<label>Submission Date<span style="color:red">*</span></label>
						<input type="date" name="SubmissionDate" class="form-control col-4">
                    </div>
                    <button type="submit" name="Create" class="btn btn-primary mr-2">Save Changes</button>
                    <a id="det" href="index" class="btn btn-light">Cancel</a>
            	</form>
            </div>
        </div>
    </div>
</div>