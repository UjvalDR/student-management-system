<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$usn=$_SESSION['usn'];

$result = $dbc->query("SELECT usn,name,pic,email,address,phone,bldgrp,father_name,mother_name,gender,date_format(dob,'%d-%M-%Y') as dob from student where usn='$usn'"); 
while($row = $result->fetch_assoc()){ 
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
    <script src="../js/jquery.min.js"></script>
	

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
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="results.php" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="#payment" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="assignments.php" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $row['name']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 


    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;">
    	<div class="container bg-white shadow-lg" style="border-radius:30px;">
    		<div class="row d-flex no-gutters justify-content-center ">
    			<div class="col-sm-12 col-md-6 col-lg-6 d-flex ">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay   ml-5 mt-2 p-5"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" >
						<img class="responsive img-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic']); ?>" style="max-width:50%;height:auto">
						
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		       
		            <h2 class="mb-4">Profile</h2>
					
		            <ul class="about-info mt-4 px-md-0 px-2">
					    <li class="d-flex"><span>USN:</span> <span><?php echo $row['usn']?></span></li>
		            	<li class="d-flex"><span>Name:</span> <span><?php echo $row['name']?></span></li>
		            	<li class="d-flex"><span>DOB:</span> <span><?php echo $row['dob']?></span></li>
		            	<li class="d-flex"><span>Gender:</span> <span><?php echo $row['gender']?></span></li>
		            	<li class="d-flex"><span>Address:</span> <span><?php echo $row['address']?></span></li>
		            	<li class="d-flex"><span>Email:</span> <span><?php echo $row['email']?></span></li>
		            	<li class="d-flex"><span>Phone: </span> <span><?php echo $row['phone']?></span></li>
						<li class="d-flex"><span>Blood group: </span> <span><?php echo $row['bldgrp']?></span></li>
						<li class="d-flex"><span>Father Name: </span> <span><?php echo $row['father_name']?></span></li>
						<li class="d-flex"><span>Mother Name: </span> <span><?php echo $row['mother_name']?></span></li>
		            </ul>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
		
<?php } ?>
    </section>

<section class="ftco-section" id="payment">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Payment</h1>
            <h2 class="mb-4">Payment</h2>
          </div>
        </div>
    		<div class="row ">
<?php $query="SELECT f.seat_type,f.amount,fs.status,fs.fee_id from fee f, fee_status fs where f.fee_id=fs.fee_id and fs.usn='$usn' "; 
	$result = @mysqli_query($dbc, $query);  
        if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
   
					<div class="col-lg-5 ml-5 p-2 text-center shadow your-element bg-white"  data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000" style="border-radius:30px;">
					
						<h3 class="mb-1 pb-3 mt-3 text-center"><?php echo $row['seat_type']?> FEE</h3>
						<br>
						<div><label class="text-dark">USN :&nbsp; </label><b><span><?php echo $usn;?></span></b><br>
							 <label class="text-dark">Status : &nbsp;</label><b><span class="status"><?php echo $row['status']?></b></span><br>
							 <label class="text-dark">Amount : &nbsp;₹&nbsp; </label><span class="text-danger"><?php echo $row['amount']?> /-</span><br>
							 <br><div class="buts">
							 <button class="btn btn-primary float-left ml-3" data-toggle="modal" data-target="#myModal">Pay now</button> 
							<a href="challan.php?fee_id=<?php echo $row['fee_id']?>&&usn=<?php echo $usn; ?>" target="_blank"> <button class="btn btn-primary float-right mr-3">Challan <span class="icon-download"></span></button></a>
							 <br>
							 </div>
							</div>
							<br>
						</div>
					
					
					<div class="col-lg-1"></div>
					
		<?php }} ?>

				</div>
    	</div>
		
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title text-success">Online Fee Payment</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h5 class="text-danger"> OOPS..!! Payment site under construction</h5>
        </div>
        
      
        
      </div>
    </div>
  </div>
  


    </section>
	
	
	
   
 


   
		
<?php
  
ob_flush();

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
$(document).ready(function(){
 var a=$(".status").eq(0).text();
 var b=$(".status").eq(1).text();
 if(a=="Paid" && b=="Paid"){
	 $(".status").addClass("text-success");
	 $(".buts").hide();
 }else if(a=="Not Paid" && b=="Not Paid"){
	  $(".status").addClass("text-danger");
	 $(".buts").show();
 }else if(a=="Not Paid" && b=="Paid"){
	  $(".status").eq(0).addClass("text-danger");
	 $(".buts").eq(0).show();
	  $(".status").eq(1).addClass("text-success");
	 $(".buts").eq(1).hide();
 }else{
	  $(".status").eq(1).addClass("text-danger");
	 $(".buts").eq(1).show();
	  $(".status").eq(0).addClass("text-success");
	 $(".buts").eq(0).hide();
 }
	 
	 
 
  });
</script>
  </body>
</html>