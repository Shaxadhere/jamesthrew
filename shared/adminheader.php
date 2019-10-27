<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jamesthrew.com</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/fonts/feather-font/css/iconfont.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="/jamesthrew/assets/dashboard/assets/css/demo_2/style.css">
  <!-- End layout styles -->
  	<link rel="apple-touch-icon" sizes="180x180" href="/jamesthrew/assets/dashboard/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/jamesthrew/assets/dashboard/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/jamesthrew/assets/dashboard/assets/favicon//favicon-16x16.png">

</head>
<body>
	<div class="main-wrapper">
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          James<span>Threw</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="/jamesthrew/admin" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Home</span>
            </a>
          </li>
          <li class="nav-item nav-category">Recipies</li>
          <li class="nav-item">
			<a href="/jamesthrew/admin/recipies" class="nav-link">
			<i class="link-icon" data-feather="slack"></i>
              <span class="link-title">Recipies</span>
            </a>
		  </li>
		  <li class="nav-item">
            <a href="/jamesthrew/admin/tips" class="nav-link">
			<i class="link-icon" data-feather="list"></i>
              <span class="link-title">Tips</span>
            </a>
		  </li>
          </li>
          <li class="nav-item nav-category">Competetions</li>
          <li class="nav-item">
            <a href="/jamesthrew/admin/contests" class="nav-link">
			<i class="link-icon" data-feather="target"></i>
              <span class="link-title">Contests</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jamesthrew/admin/announcements" class="nav-link">
			<i class="link-icon" data-feather="zap"></i>
              <span class="link-title">Announcements</span>
			</a>
		  </li>

          <li class="nav-item nav-category">Others</li>
          <li class="nav-item">
            <a href="/jamesthrew/admin/feedbacks" class="nav-link">
			<i class="link-icon" data-feather="edit-3"></i>
              <span class="link-title">Feedbacks</span>
            </a>
          </li>          
          <li class="nav-item">
            <a href="/jamesthrew/admin/faqs" class="nav-link">
              <i class="link-icon" data-feather="info"></i>
              <span class="link-title">FAQs</span>
            </a>
		  </li> 
		  <li class="nav-item">
            <a href="/jamesthrew/admin/userprofile" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">User Profile</span>
            </a>
          </li>             
        </ul>
      </div>
    </nav>

		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					
					<ul class="navbar-nav">
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="/jamesthrew/assets/dashboard/assets/images/faces/face1.jpg" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="/jamesthrew/assets/dashboard/assets/images/faces/face1.jpg" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Shehzad Ahmed</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="page-content">