<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$Tid=$_SESSION['teacher'];
$T_name=$_SESSION['T_name'];

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
	          <li class="nav-item"><a href="teacherhome.php" class="nav-link"><span>Profile</span></a></li>
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
			<li class="nav-item dropdown"><a class="nav-link " href="#ass-section" id="navbardrop" data-toggle="dropdown"><span>Assignments</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="tassignments.php">Post</a>
					<a class="dropdown-item" href="viewassignments.php">View</a>
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $T_name;?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 



	
 <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="ass-section">
    	
		<div class="container shadow bg-white mb-5 rounded-lg" data-aos="fade-up" data-aos-duration="2000" style="margin-top:150px;">
    		<div class="row ">
			<div class="col-lg-12">
			<h2 class="text-center mt-2">POST ASSIGNMENT</h2>
			 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Class : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<?php getSSID($dbc); ?>
						</div>
					</div>
				</div>
			</div>
			  
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Subjects : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<?php getSubjects($dbc,$Tid); ?>
						</div>
					</div>
				</div>
			</div>
			  
			  	<div class="row mt-2">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Assignment : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="text" name="assignment" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			 	<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Due Date : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="datetime-local" class="form-control" name="due"  required>
							</div>
						</div>
					</div>
				</div>
			</div>
			 
			
			
			
			<div class="row ">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Upload  : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="ass" id="customFile" required>
								<label class="custom-file-label" for="customFile">Select the Assignment doc</label>
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
   
	<?php
							if(isset($_POST['submit'])){
								
								$target_path = "../assignments/";
								$target_path = $target_path . basename ($_FILES['ass']['name']);
								if(move_uploaded_file($_FILES['ass']['tmp_name'], $target_path)){
								
								$ass = basename($_FILES['ass']['name']);
								
								$ass_name = $_POST['assignment'];
								$sub_code = $_POST['subject'];
								$ssid  = $_POST['ssid'];
								$due = $_POST['due'];
								
								$qr = "INSERT INTO assignment (ass_name,sub_code, teacher_id,ssid,due,ass_loc) 
													VALUES ('$ass_name','$sub_code','$Tid','$ssid','$due','$ass')";
								$res = $dbc->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"assignment Succesfully Added\");
											</script>";
									}
								}
								else 'Failed';
							}
						?>
    
 


   
		
<?php
 
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
    
	
	  
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>



  </body>
</html>