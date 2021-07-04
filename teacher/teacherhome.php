<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$Tid=$_SESSION['teacher'];

$result = $dbc->query("SELECT Teacher_id,T_name,T_pic,T_email,T_phone,T_gender,date_format(t_dob,'%d-%M-%Y') as dob,designation,branch_id from teacher where teacher_id='$Tid'"); 
while($row = $result->fetch_assoc()){ 
?>
  <head>
  
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">   
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	
  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/bp2.jpg);background-repeat: no-repeat;background-attachment:fixed;
 background-size:100% 100%;">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	       <ul class="navbar-nav nav ml-auto">
			
	          <li class="nav-item"><a href="thome.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Profile</span></a></li>
	           <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>View</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="viewstudents.php">Students</a>
				</div>
			</li>
			 <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Add</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="addmarks.php">Marks</a>
				</div>
			</li>
			<li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Assignments</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="tassignments.php">Post</a>
					<a class="dropdown-item" href="viewassignments.php">View</a>
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $row['T_name']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 


    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;">
    	<div class="container shadow-lg mb-5 bg-white" style="border-radius:30px;">
    		<div class="row d-flex no-gutters justify-content-center ">
    			<div class="col-sm-12 col-md-6 col-lg-6 d-flex ">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay   ml-5 mt-2 p-5"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" >
						<img class="responsive img-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['T_pic']); ?>" style="max-width:50%;height:auto">
						
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		       
		            <h2 class="mb-4">Profile</h2>
					
		            <ul class="about-info mt-4 px-md-0 px-2">
					    <li class="d-flex"><span>Teacher ID:</span> <span><?php echo $row['Teacher_id']?></span></li>
		            	<li class="d-flex"><span>Name:</span> <span><?php echo $row['T_name']?></span></li>
		            	<li class="d-flex"><span>DOB:</span> <span><?php echo $row['dob']?></span></li>
		            	<li class="d-flex"><span>Gender:</span> <span><?php echo $row['T_gender']?></span></li>
		            	<li class="d-flex"><span>Email:</span> <span><?php echo $row['T_email']?></span></li>
		            	<li class="d-flex"><span>Phone: </span> <span><?php echo $row['T_phone']?></span></li>
						<li class="d-flex"><span>Branch: </span> <span><?php echo $row['branch_id']?></span></li>
		            	<li class="d-flex"><span>Designation: </span> <span><?php echo $row['designation']?></span></li>
		            </ul>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
		

    </section>


   

    
 


   
		
<?php
 } 
ob_flush();

require('../footer.php');
?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
  <script src="../js/jquery.min.js"></script>
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
	VanillaTilt.init(document.querySelector(".your-element"), {
		max: 25,
		speed: 400, 
		glare: true,
    "max-glare":1
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>
    
  </body>
</html>