<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');

?>
  <head>
    <title>Add performance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
	
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<script>
$(document).ready(function(){
$("#cie").hide();
  $("#usn").change(function(){
    $("#cie").show();
  });

});
function showUser(str) {
  if (str=="") {
    document.getElementById("usn").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("usn").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}

</script> 

  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/bp.jpg);background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
	  
	  
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
			<li class="nav-item dropdown"><a class="nav-link " href="#about-section" id="navbardrop" data-toggle="dropdown"><span>Add</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="addSubjects.php">Subjects</a>
					<a class="dropdown-item" href="addperformance.php">SGPA</a>
					<a class="dropdown-item" href="feestatus.php">Fee Status</a>
	
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>View</span></a>
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
 


    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	
		<div class="container shadow bg-white rounded-lg" data-aos="fade-up" data-aos-duration="2000" style="margin-top:150px;">
    		<div class="row ">
			<div class="col-lg-12">
			<h2 class="text-center mt-2">ADD Performance</h2>
			 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
		
		
		    <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Branch : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<?php getBranch($dbc); ?>
						</div>
					</div>
				</div>
			</div>
			
					<div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">SSID : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<?php getSSID1($dbc); ?>
						</div>
					</div>
				</div>
			</div>
			
		 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Student : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							 <select name="usn" class="custom-select" id="usn"  required>  </select>
						</div>
					</div>
				</div>
			</div>
			<br>
			
			<div id="cie" class="bg-light mt-3 p-2">
			<br>
			  <div class="row">
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-1: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA1" min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-2: </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA2" min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-3: </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA3" min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-4: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA4"  min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-5: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA5"  min="0" max="100">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-6: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA6"  min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				<br>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-7: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA7"  min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">SGPA-8: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="SGPA8"  min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				<br>
				
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-sm-2">
							<h5 class="mt-2 ml-2">CGPA: </h5>
						</div>
						<div class="col-lg-7 col-sm-10">
							<div class="form-group">
								<input type="number" step="any" class="form-control" name="CGPA"  min="0" max="10">
							</div>
						</div>
					</div>
				</div>
				<br>
				
			</div>
			
			<div class="col text-center form-group mt-4">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
		</div>
			
            </form>
		</div>
	</div>
	</div>
</section>
	
<?php 

$ssid="";
$subject="";
$usn="";

if (isset($_POST['submit']) && !empty($_POST['ssid'])&& !empty($_POST['usn'])){

$ssid=$_POST["ssid"];
$usn=$_POST["usn"];
$SGPA1=$_POST["SGPA1"];
$SGPA2=$_POST["SGPA2"];
$SGPA3=$_POST["SGPA3"];
$SGPA4=$_POST["SGPA4"];
$SGPA5=$_POST["SGPA5"];
$SGPA6=$_POST["SGPA6"];
$SGPA7=$_POST["SGPA7"];
$SGPA8=$_POST["SGPA8"];
$CGPA=$_POST["CGPA"];

if($usn!="" && $ssid!=""){
   $query = "INSERT INTO performance (USN,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,CGPA) VALUES ('$usn','$SGPA1','$SGPA2',$SGPA3,'$SGPA4','$SGPA5','$SGPA6','$SGPA7',$SGPA8,'$CGPA')";
     addperformance($dbc,$query);
		
}
	
}

ob_flush();


?>
<?php
require('../footer.php');
?>
    


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
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