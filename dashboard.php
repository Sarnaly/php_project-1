<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/dashboard.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarnaly</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./img/fcti-soft-brand-icon.png" alt="logo" style="width:150px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" href="#">Contact</a> 
        </li>
        
      </ul>
      
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
      <li class="nav-but">
          <a class="btn btn-outline-light" href="../Register_form/index.php">Register</a>
        </li>
        <li class="nav-but">
          <a class="btn btn-outline-light" href="../login_form/login.php">Login</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<div class="container-fluid" style="padding-left:0;position:relative">
	<section class="section-content">
			<div class="row d-flex">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xxl-2" > 
					<nav class="sidebar card">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item">
								<a class="list-group-item dashboard" href="admin_index.php?page=admin_dashboard"><i class="fa-solid fa-dashboard" style="padding-right:7px;"></i>Dashboard</a>
							</li>
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-plus nav-icon"></i>Admission <i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="admin_index.php?page=admission_form">Admission</a></li>
									<li><a class="nav-link" href="admin_index.php?page=admission_report">Admission Report</a></li>

									
								</ul>
							</li>	
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-plus nav-icon"></i>Courses <i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="admin_index.php?page=add_course">Add Course</a></li>
									<li><a class="nav-link" href="admin_index.php?page=course">All Courses</a></li>
									
								</ul>
							</li>	
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-tie nav-icon"></i>Student Account<i class="fa-solid fa-caret-down"></i></a>
							
							</li>
							
														<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-tie nav-icon"></i> Student List<i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">Course Wise List</a></li>
									
								</ul>
							</li>
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-gear nav-icon"></i>Setting<i class="fa-solid fa-caret-down"></i></a>
							
							</li>


						     
						</ul>
					</nav>
				</div>				
				
			
	
			</div>
	</section>

</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>