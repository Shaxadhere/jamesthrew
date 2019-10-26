<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo_2/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Oct 2019 14:10:15 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="../assets/dashboard/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="../assets/dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../assets/dashboard/assets/fonts/feather-font/css/iconfont.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="../assets/dashboard/assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/dashboard/assets/images/favicon.png" />

</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
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
            <a href="dashboard-one.html" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Home</span>
            </a>
          </li>
          <li class="nav-item nav-category">New Ideas</li>
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
             
              <span class="link-title">Recipies</span>
            </a>
		  </li>
		  <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              
              <span class="link-title">Tips</span>
            </a>
		  </li>
		  	
		  
         <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">Recipies</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/email/inbox.html" class="nav-link">Recipies</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Tips</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.html" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>-->
          
          </li>
          <li class="nav-item nav-category">Announcements</li>
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
             
              <span class="link-title">Contest</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              
              <span class="link-title">Announcements</span>
			</a>
		  </li>

          <li class="nav-item nav-category">Details</li>
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              
              <span class="link-title">Feedback</span>
            </a>
          </li>          
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              
              <span class="link-title">Faq's</span>
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
								<img src="../assets/dashboard/assets/images/faces/face1.jpg" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="../assets/dashboard/assets/images/faces/face1.jpg" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
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