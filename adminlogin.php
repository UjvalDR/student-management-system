<!DOCTYPE html>

<?php
   ob_start();
   session_start();
   $page_title = 'Admin Login Page';
   include ('connect.php');
?>

<html lang="en">
  <head>
  
    <title>Admin Login</title>
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
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
                $username=$_POST['username'];
                $password=$_POST['password'];
                $result = @mysqli_query($dbc, "select count(1),admin_name from admin where admin_email='$username' and admin_password='$password'");
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $noOfrecords=$row[0];
				 $user=$row[1];
                
               if ($noOfrecords>0) {
                  $_SESSION['admin'] = $user;
                  header('Location: admin/ahome.php');  
               }else {
                  $msg = 'Wrong username or password';
               }
            }
          //logic to check if correct user id and password entered - End()
         ?>
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="bg" style="background-image:url(images/ad2.jpg);background-position:cover;width:100%;height:auto">
	  
	 

    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Admin</span></a></li>
	          <li class="nav-item"><a href="studentlogin.php" class="nav-link"><span>Student</span></a></li>
	          <li class="nav-item"><a href="teacherlogin.php" class="nav-link"><span>Teacher</span></a></li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	
 <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;margin-bottom:150px;">
    	<div class="container" data-aos="zoom-in" data-aos-duration="2000">
    		<div class="row ">
				<div class="col-md-1 col-lg-1"></div>
    			<div class="col-sm-12 col-md-8 col-lg-8 mx-auto p-3  shadow-lg  bg-white" style="border-radius:30px;">
    				 <h2 class="text-center">ADMIN LOGIN</h2>
					 <h5 class="text-center text-danger mt-4"><?php echo $msg; ?></h5>
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class=" p-4 p-md-5 contact-form">
							
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
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