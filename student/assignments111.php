<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$usn=$_SESSION['username'];

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
	          <li class="nav-item"><a href="studenthome.php#about-section" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="results.php" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="studenthome.php#payment" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $_SESSION['name']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 
 
 <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container-fluid bg-white">
    		<div class="row">
    			<div class="col-md-2">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Education</a></li>
					      <li><a href="#page-2">Experience</a></li>
					      <li><a href="#page-3">Skills</a></li>
					      <li><a href="#page-4">Awards</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page one">
					  	<h2 class="heading">Education</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Bachelor of Science in Computer Science</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    					</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Computer Processing Systems/Computer Software</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Diploma in Computer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Art &amp; Creative Director</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
					  </div>

					  <div id="page-2" class= "page two">
					  	<h2 class="heading">Experience</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Software Developer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Web Designer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Web Marketing</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Art &amp; Creative Director</h2>
		    					<span class="position">Side Tech</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Wordpress Developer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2017-2018</span>
		    					<h2>UI/UX Designer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
					  </div>
					  
					  
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	<div class="row progress-circle mb-5">
						
					  		<div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='100'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						       
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='87.6'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='75'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						      </div>
						    </div>
					  	</div>
					  	<div class="row">
					  		<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Photoshop</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
										    <span>90%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>jQuery</h3>
										<div class="progress">
										 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
										  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
										    <span>85%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>HTML5</h3>
										<div class="progress">
										 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
										  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
										    <span>95%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>CSS3</h3>
										<div class="progress">
										 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
										    <span>90%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>WordPress</h3>
										<div class="progress">
										 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="7.5"
										  	aria-valuemin="0" aria-valuemax="10" style="width:40%">
										    <span>7.5</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>SEO</h3>
										<div class="progress">
										 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
										  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
										    <span>80%</span>
										  	</div>
										</div>
									</div>
								</div>
					  	</div>
					  </div>
					  <div id="page-4" class= "page four">
					    <h2 class="heading">Awards</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Top 10 Web Developer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    					</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Top 5 LeaderShip Exellence Winner</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Top 4 Web Tester</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Art &amp; Creative Director</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
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
    
  </body>
</html>