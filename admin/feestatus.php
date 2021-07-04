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

<script>
$(document).ready(function(){
$("#fees").hide();
  $("#usn").change(function(){
    $("#fees").show();
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

function showFee(str) {
  if (str=="") {
    document.getElementById("fee").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("fee").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getfee.php?q="+str,true);
  xmlhttp.send();
}

</script>
	
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
			<h2 class="text-center mt-2">FEE SECTION</h2>
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
							<h5 class="mt-2 ml-2">Class : </h5>
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
							 <select name="usn" class="custom-select" id="usn" onchange="showFee(this.value)" required>  </select>
						</div>
					</div>
				</div>
			</div>
	
	
			<div id="fees">
				<div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Seat Type : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="fee" class="custom-select" id="fee" required>  </select>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Fee Status : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="feestatus" id="feestatus" class="custom-select" required>
								<option selected disabled> Select From Below</option>
								<option value="Paid">Paid</option>
								<option value="Not Paid">Not Paid</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Exam Fee : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="examfee" id="examfee" class="custom-select" required>
								<option selected disabled> Select From Below</option>
								<option value="FEXAM">₹ 1320 </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
				 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Exam Fee Status : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="examfeestatus" id="examfeestatus" class="custom-select" required>
								<option selected disabled> Select From Below</option>
								<option value="Paid">Paid</option>
								<option value="Not Paid">Not Paid</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			</div>
		
		
              <div class="col text-center form-group mt-4">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
					</div>
				</div>
			</div>
    	</div>
 </section>
 <br>
 
<?php 




if (isset($_POST['submit']) && !empty($_POST['usn'])
	
) {	
   

$usn=$_POST["usn"];
$fee_id=$_POST["fee"];
$feestatus=$_POST["feestatus"];
$exam=$_POST["examfee"];
$examstatus=$_POST["examfeestatus"];




   $query = "INSERT INTO fee_status(USN,FEE_ID,STATUS) values('$usn','$fee_id','$feestatus'),('$usn','$exam','$examstatus') ON DUPLICATE KEY UPDATE STATUS='$feestatus',STATUS='$examstatus'";
        addFee($dbc,$query);
		

		ob_flush();
}
?>

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

  
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    
  </body>
</html>