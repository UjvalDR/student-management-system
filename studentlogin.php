<!DOCTYPE html>
<html lang="en">

<?php
   ob_start();
   session_start();
   $page_title = 'Login Page';
   include ('connect.php');
?>

  <head>
  
    <title>Student Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
  </head>
  
    <?php
            $msg = '';
          
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['login']) && !empty($_POST['USN']) 
               && !empty($_POST['password'])) {
				
                $username=$_POST['USN'];
                $password=$_POST['password'];
				$result = $dbc->query("SELECT count(1),usn,name from student where usn='$username' and passwd='$password'"); 
				while($row = $result->fetch_assoc()){
                $noOfrecords=$row['count(1)'];
				$user=$row['usn'];
				$name=$row['name'];
			 }
                
               if ($noOfrecords>0) {
                  $_SESSION['usn'] = $user;
				  $_SESSION['studentname'] = $name;
                  header('Location: student/shome.php');  
               }else {
                  $msg = 'Wrong username or password';
               }
                
              
            }
          //logic to check if correct user id and password entered - End()
         ?>
  
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="bg" style="background-image:url(images/ss.jpg);background-position:cover;width:100%;height:auto">
	  
	 

    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="adminlogin.php" class="nav-link"><span>Admin</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Student</span></a></li>
	          <li class="nav-item"><a href="teacherlogin.php" class="nav-link"><span>Teacher</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	
 <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;margin-bottom:150px;">
    	<div class="container" data-aos="fade-up" data-aos-duration="2000">
    		<div class="row ">
				<div class="col-md-1 col-lg-1"></div>
    			<div class="col-sm-12 col-md-8 col-lg-8 mx-auto p-3  shadow-lg  bg-white" style="border-radius:30px;">
    				 <h2 class="text-center">STUDENT LOGIN</h2>
					 <h5 class="text-center text-danger mt-4"><?php echo $msg; ?></h5>
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="p-4 p-md-5 contact-form">
								<div class="form-group">
									<input type="text" class="form-control" name="USN" placeholder="USN" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
             
								<div class="col text-center">
									<input type="submit" name="login" value="Submit" class="btn btn-primary py-3 px-5">
								</div>
							</form>
          
						</div>
					</div>
				</div>
			
 </section>



<?php
require('footer.php');
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>