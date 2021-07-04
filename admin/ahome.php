<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
?>
  <head>
  
    <title>Add Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>

  </head>
  
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/bp.jpg);background-repeat: no-repeat;background-attachment:fixed;background-size:100% 100%;">
	  
	 

    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="addstudent.php" class="nav-link"><span>Add Student</span></a></li>
	          <li class="nav-item"><a href="addteacher.php" class="nav-link"><span>Add Teacher</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link"><span>Add</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>View</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="studentview.php">Students</a>
					<a class="dropdown-item" href="teacherview.php">Teachers</a>
					<a class="dropdown-item" href="#">Staff</a>
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo  $_SESSION["admin"] ; ?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Profile</a>
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	
 <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	
		<div class="container rounded-lg" data-aos="fade-up" data-aos-duration="2000" style="margin-top:150px;">
		<div class="row">
				<div class="col-lg-4">
					<div class="card grad" data-tilt-scale="1.1" style="width:300px;background-image: linear-gradient(to bottom, #fc5c7d, #6a82fb);">
						   <div class="card-body ">
								<h4 class="card-title text-center">ADD STUDENT</h4>
							</div>
							<div class="card-body">
								<center><a href="addstudent.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
						
					<div class="col-lg-4">	
					<div class="card grad"data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:300px;background-image: linear-gradient(to bottom,  #00b09b, #96c93d);">
						   <div class="card-body ">
								<h4 class="card-title text-center">ADD TEACHER</h4>
							</div>
							<div class="card-body">
								<center><a href="addteacher.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
					<div class="col-lg-4">	
					<div class="card grad" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:300px;background-image: linear-gradient(to bottom,  #ff9966, #ff5e26);">
						   <div class="card-body ">
								<h4 class="card-title text-center">ADD SGPA</h4>
							</div>
							<div class="card-body">
								<center><a href="addperformance.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
						</div>
					<div class="row mt-5">
					<div class="col-lg-6">	
					<div class="card grad" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:500px;background-image: linear-gradient(to bottom,  #00f260, #0575e6);">
						   <div class="card-body ">
								<h4 class="card-title text-center">ADD SUBJECTS</h4>
							</div>
							<div class="card-body">
								<center><a href="addSubjects.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
						
						<div class="col-lg-6">	
					<div class="card grad" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:500px;background-image: linear-gradient(to bottom,  #7f00ff, #e100ff);">
						   <div class="card-body ">
								<h4 class="card-title text-center">UPDATE FEE STATUS</h4>
							</div>
							<div class="card-body">
								<center><a href="feestatus.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
					</div>
						
					<div class="row mt-5">
						<div class="col-lg-6">	
					<div class="card grad" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:500px;background-image: linear-gradient(to bottom,  #00b09b, #96c93d);">
						   <div class="card-body ">
								<h4 class="card-title text-center">VIEW STUDENTS</h4>
							</div>
							<div class="card-body">
								<center><a href="studentview.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
						
						<div class="col-lg-6">	
					<div class="card grad" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1" style="width:500px;background-image: linear-gradient(to bottom,  #fc5c7d, #6a82fb);">
						   <div class="card-body ">
								<h4 class="card-title text-center">VIEW TEACHERS</h4>
							</div>
							<div class="card-body">
								<center><a href="teacherview.php" class="btn btn-primary stretched-link">click here</a></center>
							</div>
						</div>
						</div>
						
				</div>
    	</div>
 </section>
 <br>
 


<?php
require('../footer.php');
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="../js/main.js"></script>
  <script type="text/javascript" src="../js/vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".grad"), {
		max: 25,
		speed: 400, 
		glare: true,
       "max-glare":0.8,
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".grad"));
</script>
  

    
  </body>
</html>