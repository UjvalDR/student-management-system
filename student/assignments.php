<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
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
	          <li class="nav-item"><a href="#ass-section" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $_SESSION['studentname']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 
	<section class="ftco-section" id="ass-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-2 mt-2">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Assignments</h1>
            <h2 class="mb-4">Assignments</h2>
          </div>
        </div>
    		<div class="row ">
<?php 
	$query="select a.ass_name,a.sub_code,date_format(a.due,'%d-%m-%Y ') due ,s.sub_name,a.ass_loc,t.t_name,t.t_pic from assignment a,subjects s,student s1,semsec ss,teacher t where s.sub_code=a.sub_code and a.teacher_id = t.teacher_id and ss.sem=s.sem and s1.ssid=ss.ssid and s1.usn='$usn'"; 
	$result = @mysqli_query($dbc, $query);  
        if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){							
?>	 	 

<div class="col-lg-4 my-3 your-element"   data-tilt data-tilt-max="1" data-tilt-scale="1.1">
   <div class="card shadow-lg rounded-lg">
  <div class=" card-header bg-info"> 
   <img class="responsive rounded-circle float-left" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['t_pic']); ?>" style="max-width:20%;height:auto">					
  <h3 class="mb-3 pb-3 mt-3 float-right"><span><?php echo $row['sub_name']?></span></h3>
  </div>
  
   <div class="card-body">
	<div class="text-center">
	<label class="text-dark"> Title : &nbsp;</label><span class=text-dark><?php echo $row['ass_name']?></span><br>
	<label class="text-dark">Subject Code : &nbsp;</label><span class=text-dark><?php echo $row['sub_code']?></span><br>
	<label class="text-dark">Teacher : &nbsp;</label><span class=text-dark><?php echo $row['t_name']?></span><br>
	<label class="text-dark" id="due">Due : &nbsp; </label><span class=text-danger><?php echo $row['due']?></span><br>
	 <div>
	 <a class="float-left" href="../assignments/<?php echo $row['ass_loc']?>" target="_blank" ><button  class="btn btn-primary">View</button></a>
	<a href="#myModal"><button  class="btn btn-success float-right"  data-toggle="modal" data-target="#myModal" >Upload</button>
	</div>		
    </div>
   </div>
   </div>
</div>




<?php	
            }
			
        }
		else{
			echo '<script>alert("No Assignments Found");</script>';
		}
?>

						
						
				</div>
    	</div>
		
		
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="text-center">Submit Assignment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <h5 class="text-center"> Hey <b><?php echo $_SESSION['studentname']?> </b>Please submit your work here</h5>
		 
		  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
		
			
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
                <input type="submit" name="upload" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
	</div>
	
	

   
	<?php 
							if(isset($_POST['upload'])){
								
								$target_path = "../stu_assignments/";
								$target_path = $target_path . basename ($_FILES['ass']['name']);
								if(move_uploaded_file($_FILES['ass']['tmp_name'], $target_path))
								{
								
								$ass = basename($_FILES['ass']['name']);
								$due=date("Y-m-d h:i:s");
								$qr = "INSERT INTO stu_assingment (usn,sub_time,ass_loc) VALUES ('$usn','$due','$ass')";
								$res = $dbc->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"assignment Succesfully submitted\");
											</script>";
									}
									else "<script type = \"text/javascript\">
											alert(\"Failed to submit\");
											</script>";
								}
								else "<script type = \"text/javascript\">
											alert(\"Failed to submit\");
											</script>";
							}
					?>
 
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