<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
?>
  <head>
    <title>Add Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
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
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Add Student</span></a></li>
	          <li class="nav-item"><a href="addteacher.php" class="nav-link"><span>Add Teacher</span></a></li>
			<li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Add</span></a>
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
			<h2 class="text-center mt-2">ADD TEACHER</h2>
			 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 p-md-5 contact-form">
			 <div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Name : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="text" class="form-control" name="Name"  required autofocus>
							</div>
						</div>
					</div>
				</div>
				</div>
			  
			   <div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Teacher ID : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="text" class="form-control" name="Teacherid"  required>
							</div>
						</div>
					</div>
				</div>
			</div>
			  
			 	<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">DOB : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="date" class="form-control" name="DOB" min="1994-01-01" max="2005-12-31" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			 
			 <div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Phone : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="number" size="10" name="phone" maxlength="10" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Email : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="email" name="email" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Gender : </h5>
						</div>
						<div class="col-lg-8 col-sm-10 mt-2">
							   <div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio" name="Gender" value="Male">
									<label class="custom-control-label" for="customRadio">Male</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio2" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio2">Female</label>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row ">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Photo : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="image" id="customFile" required>
								<label class="custom-file-label" for="customFile">Choose file &lt; 100kb in jpg format</label>
							</div>
						</div>
					</div>
				</div>
			</div>

				
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
							<h5 class="mt-2 ml-2">Designation : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<select name="designation" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="Professor">Professor</option>
								<option value="Assoc Professor">Assoc Professor</option>
								<option value="Asst Professor">Asst Professor</option>
							</select>
						</div>
					</div>
				</div>
			</div>
            
			
			<div class="row mt-2">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Password : </h5>
						</div>
						<div class="col-lg-8 col-sm-10">
							<div class="form-group">
								<input type="text" name="password" class="form-control" required>
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

$Name="";
$Teacherid="";
$dob="";
$phone="";
$email="";
$Gender="";
$designation="";
$branch="";
$password="";



if (isset($_POST['submit']) && !empty($_POST['Name'])&& !empty($_POST['Teacherid']) && !empty($_POST['DOB'])&& !empty($_POST['phone'])&& !empty($_POST['email'])&& !empty($_POST['Gender'])&& !empty($_POST['designation'])&& !empty($_POST['branch'])&&  !empty($_POST['password'])
	
) {	
   
$Name=$_POST["Name"];
$Teacherid=$_POST["Teacherid"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$Gender=$_POST["Gender"];
$designation=$_POST["designation"];
$branch=$_POST["branch"];
$password=$_POST["password"];
$dob=$_POST["DOB"];

$TID=checkifTid($Teacherid);
$PHONE=checkifphone($phone);


if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image));}}


if($TID!="" && $PHONE!=""){
        $query = "INSERT INTO teacher (Teacher_id, T_NAME, T_PIC, T_GENDER,T_DOB,T_PHONE, T_EMAIL, BRANCH_ID, designation,T_password) VALUES ('$TID','$Name',
		'$imgContent','$Gender','$dob',$PHONE,'$email','$branch','$designation','$password')";
        addTeacher($dbc,$query);
		
}
		ob_flush();
}
?>

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

  
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    
  </body>
</html>