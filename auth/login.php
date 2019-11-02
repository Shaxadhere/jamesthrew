<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
if(isset($_GET['return'])){
	$return = $_GET['return'];
}
$return = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login - JamesThrew</title>
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/core/core.css">
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/css/demo_2/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/jamesthrew/assets/dashboard/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/jamesthrew/assets/dashboard/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/jamesthrew/assets/dashboard/assets/favicon//favicon-16x16.png">
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">James<span>Threw</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form class="cmxform" id="" method="post" action="auth">
						<fieldset>
							<input type="hidden" value="<?php echo (empty($return) ? $return : ''); ?>" name="return">
							<div class="form-group">
								<label for="email">Email</label>
								<input id="email" name="Email" class="form-control" name="email" type="email" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" name="Password" class="form-control" name="password" type="password" required>
							</div>
							<input class="btn btn-primary" name="Login" type="submit" value="Login">
						</fieldset>
					</form>
                  </div>
                </div>
              </div>
			</div>
		</div>
	</div>

</div>
</div>
</div>

	<script src="/jamesthrew/assets/dashboard/assets/vendors/core/core.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/inputmask/jquery.inputmask.bundle.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/template.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/form-validation.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/bootstrap-maxlength.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/inputmask.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/typeahead.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/tags-input.js"></script>
	<script src="/jamesthrew/assets/dashboard/assets/js/template.js"></script>
</body>

</html>