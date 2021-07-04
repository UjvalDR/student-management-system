<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
?>

  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	
  </head>
	  
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/bp.jpg);background-repeat: no-repeat;background-attachment:fixed;
 background-size:100% 100%;">
	  
	 

    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	         <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="ahome.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="addstudent.php" class="nav-link"><span>Add Student</span></a></li>
	          <li class="nav-item"><a href="addteacher.php" class="nav-link"><span>Add Teacher</span></a></li>
			<li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Add</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="addSubjects.php">Subjects</a>
					<a class="dropdown-item" href="addperformance.php">SGPA</a>
					<a class="dropdown-item" href="feestatus.php">Fee Status</a>
	
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#about-section" id="navbardrop" data-toggle="dropdown"><span>View</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="studentview.php">Students</a>
					<a class="dropdown-item" href="teacherview.php">Teachers</a>
	
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


	<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;">
    	<div class="container shadow bg-white rounded-lg mb-4" data-aos="fade-up" data-aos-duration="2000" style="margin-top:150px;">
    		<div class="row ">
			<div class="col-lg-12">
			<h2 class="text-center mt-2">View Students</h2>
			 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
		
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Branch : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="branch" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="AE">AE</option>
								<option value="CSE">CSE</option>
								<option value="CV">CV</option>
								<option value="EC">EC</option>
								<option value="EEE">EEE</option>
								<option value="IE">IE</option>
								<option value="IM">IM</option>
								<option value="IS">IS</option>
								<option value="ME">ME</option>
								<option value="MEE">MEE</option>
							    <option value="TC">TC</option>
							</select>
						</div>
					</div>
				</div>
			</div>
				 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Semester : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="sem" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="1">I  Sem</option>
								<option value="2">II  Sem</option>
								<option value="3">III Sem</option>
								<option value="4">IV  Sem</option>
								<option value="5">V  Sem</option>
								<option value="6">VI  Sem</option>
								<option value="7">VII Sem</option>
								<option value="8">VIII  Sem</option>
							</select>
						</div>
					</div>
				</div>
			</div>
            
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Section : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="sec" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="col text-center form-group mt-4">
                <button type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">SUBMIT</button>
              </div>
		</div>
   
		
			
             
			  
            </form>
			</div>
			</div>
</section>
<div  class="container-fluid shadow bg-white" id="student">
<h2 class="text-center">STUDENTS</h2>
<div class ="row">

<?php
if(isset($_POST['submit']))
{
	$branch=$_POST['branch'];
	$sec=$_POST['sec'];
	$sem=$_POST['sem'];
	$query="select usn,name,pic from student where branch_id='$branch' and ssid like '%$sem%' and ssid like '%$sec%'";
	$query_run=	mysqli_query($dbc,$query); 
	if(mysqli_num_rows($query_run)>0)
	{
		while($row = $query_run->fetch_assoc()){ 
?>
<div class="col-lg-3 your-element"  data-tilt-scale="1.1">
   <div class="card shadow-lg mb-3 rounded-lg" >
        <img class="card-img-top my-3 mx-auto" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic']); ?>" alt="Card image" style="max-height:200px;max-width:200px;min-height:200px;min-width:200px;">
            <div class="card-body">
    <h4 class="card-title text-center"><?php echo $row['usn'] ;?></h4>
    <h5 class="card-title text-center"> <?php echo $row['name'];?></h5>
	</div>
 </div>
 </div>


<?php	

            }
			
        }
		else{
			echo '<script>alert("No Students Found");</script>';
		}
	}
ob_flush();
?>
</div>
</div>
<?php
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
		max: 10,
		speed: 400, 
		perspective:1000,
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>


    
    
  </body>
</html>