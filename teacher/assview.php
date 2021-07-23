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
	 


<?php 
	
	$ass_no=$_GET['assno'];
	$ssid=$_GET['ssid'];
	
	$query="select a.ass_name,a.sub_code,date_format(a.due,'%d-%m-%Y ') due ,s.sub_name,a.ass_loc,t.t_name,t.t_pic from assignment a,subjects s,teacher t where s.sub_code=a.sub_code and a.teacher_id = t.teacher_id and  a.ass_no=$ass_no" ; 
	$result = @mysqli_query($dbc, $query); 
	$row=mysqli_fetch_array($result);
	
	
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
			<div class="mt-2 pb-2 row bg-white rounded-lg shadow">
				<div class="col-lg-3">
					<h4>Class : <?php echo $ssid;?> </h4>
				</div>
				<div class="col-lg-6 justify-content-center">
					<h3 class="text-center"><?php echo $row['ass_name'];?> </h3>
					<div class="col text-center mt-2">
						<a href="../assignments/<?php echo $row['ass_loc']?>" target="_blank"><button class="btn btn-warning"> View </button></a>
					</div>
				</div>
				<div class="col-lg-3">
					<h5>Due : <?php echo $row['due'];?> </h5>
				</div>
			</div>
		</div>
		
		
		<div class="container bg-white mt-3">
		
		
<?php 
	$query1="select a.usn, date_format(a.sub_time,'%d-%m-%Y %H:%m:%s') sub_time,a.ass_loc,s.name from stu_assingment a,student s where s.usn=a.usn and a.ass_no='$ass_no'"; 
	$result1 = @mysqli_query($dbc, $query1); 
    $count=mysqli_num_rows($result1);	?>
			<div class="mt-3 mb-5 pt-2">
				<h5 class="text-center">Total submissions : <?php echo $count;?></h5>
			</div>
      <?php  if($result1->num_rows > 0){ 
			
            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){	
			
?>
		
		<div class="row bg-white">
				<div class="col-lg-3">
					<p><?php echo $row1['usn'];?> </p>
				</div>
				<div class="col-lg-3 justify-content-center">
					<h6 class="text-center"><?php echo $row1['name'];?> </h6>
					
				</div>
				<div class="col-lg-2"><div class="col text-center mt-2">
						<a href="../stu_assignments/<?php echo $row1['ass_loc']?>" target="_blank"><button class="btn btn-secondary"> View </button></a>
					</div>
					</div>
				<div class="col-lg-4">
					<p>Submitted on : <?php echo $row1['sub_time'];?> </p>
				</div>
			</div>
		<hr>
		
			<?php  }
		}else{    ?>
		<p> No Submissions yet </p>
		
		<?php } ?>
		

 </div>

    </section>


   
		
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