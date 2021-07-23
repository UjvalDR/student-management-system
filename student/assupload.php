<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include ('../connect.php');
include ('functions.php');
$usn=$_SESSION['usn'];

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


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/42.jpg);background-repeat: no-repeat;background-attachment:fixed;
 background-size:100% 100%;">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid" >
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="shome.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="studenthome.php" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="results.php" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="studenthome.php#payment" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="assignments.php" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $_SESSION['studentname']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>

<?php 
	
	$ass_no=$_GET['ass_no'];
	$query="select a.ass_name,a.sub_code,date_format(a.due,'%d-%m-%Y ') due ,s.sub_name,a.ass_loc,t.t_name,t.t_pic from assignment a,subjects s,teacher t where s.sub_code=a.sub_code and a.teacher_id = t.teacher_id and  a.ass_no=$ass_no"; 
	$result = @mysqli_query($dbc, $query); 
	$row=mysqli_fetch_array($result);
	
	$query1="select sub_time,ass_loc from stu_assingment where ass_no='$ass_no' and usn='$usn'";
	$result1=@mysqli_query($dbc,$query1);
	$row1=mysqli_fetch_array($result1);
	
?> 
	
	<section class="ftco-section" id="ass-section">
    	<div class="container px-md-5">
    		<div class="row  py-2 mt-2 bg-primary rounded-lg">
			<div class="col-lg-4">
			<img class="m-2 responsive border rounded-circle float-left" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['t_pic']); ?>" style="max-width:25%;height:auto">
			</div>
           <div class="col-lg-8">
		   <h2 class="mt-2 text-white"><span><?php echo $row['sub_name']?></span><span class="float-right"><?php echo $row['sub_code']?></span></h2>
		   </div>
        </div>
		
		<div class="mt-5 mr-2 row  rounded">
			<div class="col-lg-7 shadow-lg bg-white">
				<div class="m-2 p-2">
					<iframe src="../assignments/<?php echo $row['ass_loc']?>" width="100%" height="500px"></iframe>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4 shadow-lg bg-white" style="border-radius:30px;">
				<div class="container mt-5">
					<h4 class="text-center"><?php echo $row['ass_name']; ?> </h4>
					<h5 class="text-center">Due : <span class="text-success"><?php echo $row['due']; ?> </span></h5>
					<br>
					<br>
					<?php if (!($row1)){ ?>
					<p class="mt-2 text-center"> Hey  <strong><?php echo $_SESSION['studentname'];?></strong> <br> Please submit the Work within due date</p>
					<img class="mx-auto d-block" src="../images/war.png" width="50px;" height="auto">
					<form action="upload.php" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
					
						<div class="row">
						<div class="col-lg-12 col-sm-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="ass" id="customFile" required>
								<label class="custom-file-label" for="customFile">Add work</label>
							</div>
						</div>
						<input type="hidden" name="usn" value="<?php echo $usn; ?>" />
						<input type="hidden" name="assno" value="<?php echo $ass_no ;?>" />
						<div class="col text-center mt-2">
									<input type="submit" name="upload" value="Submit" class="btn btn-primary py-3 px-5">
								</div>
					</div>
							</form>
					<?php } else { ?>
					
					<p class="mt-2 text-center"> Hey  <strong><?php echo $_SESSION['studentname'];?></strong> <br> </p>
					<img class="mx-auto d-block" src="../images/tick.png" width="50px;" height="auto">
					<p class="mt-2 text-center"> <span class="text-success">Work submitted..!!</span></p>	
					<div class="">
					<img src="../images/works.png"/>
					<a href="../stu_assignments/<?php echo $row1['ass_loc']?>" target="_blank"><button class="btn btn-primary"><?php echo $row1['ass_loc'];?> </button></a>
					</div>
						
				<?php	} ;
					?>
				</div>
			</div>
		</div>
    
    	</div>
		
		

 

    </section>
   
		
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
		max: 1,
		speed: 400, 
		perspective:1000
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