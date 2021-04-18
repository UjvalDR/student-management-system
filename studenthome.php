<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('connect.php');
include ('admin/functions.php');
?>
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 
<?php
$result = $dbc->query("SELECT usn,name,pic from student where usn='1DA18CS190'"); 
?>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:100px;">
    	<div class="container shadow-lg" style="border-radius:30px;">
    		<div class="row d-flex no-gutters justify-content-center ">
    			<div class="col-sm-12 col-md-6 col-lg-6 d-flex ">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay ml-4 mt-2 p-5"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" >
						<?php while($row = $result->fetch_assoc()){ ?> 
						<img class="responsive rounded" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic']); ?>" style="max-width:50%;height:auto">
						
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
		            	<li class="d-flex"><span>Date of birth:</span> <span>November 28, 1999</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Arakere Bengaluru</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>ujvaldr@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>9972227272</span></li>
						<li class="d-flex"><span>Blood group: </span> <span>O -ve</span></li>
		            </ul>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
		<?php } ?> 

    </section>


    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container-fluid">
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
						        <div class="progress mx-auto" data-value='90'>
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

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='80'>
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

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
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

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
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
										 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
										  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
										    <span>70%</span>
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

    <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Payment</h1>
            <h2 class="mb-4">Payment</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center shadow bg-dark your-element"  data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000" data-tilt-max-glare="0.8" style="border-radius:30px;">
					
						<h3 class="mb-3 mt-3 text-white">Annual Fee</h3>
						<br>
						<div><label>Status : </label><span>Not Paid</span><br>
							 <label>Amount : </label><span class="text-danger">75600/-</span><br>
							 <button class="btn btn-primary">pay now</button>
							</div>
						</div>
					
					
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Phtography</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Developer</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</a>
					</div>

				</div>
    	</div>
    </section>
 
	<div class="container-fluid shadow mx-auto p-4 mb-5">	
			<font color="white">
					</font><table class="table table-dark table-hover table-striped" id="tableData" border="2">
			<thead data-aos="fade-up">
				<tr>
					<th>Subject</th>
					<th>Credits(R)</th>
					<th>CIE-1</th>
					<th>Att-l</th>
					<th>CIE-2</th>
					<th>Att-2</th>
					<th>CIE-M</th>
					<th>Att-F</th>
					<th>Assignment</th>
					<th>Group Activity</th>
					<th>Final CIE</th>
					<th>SEE Grade</th>
					<th>Result YEAR</th>
				</tr>
			</thead>
			<tbody>
							<tr id="somerow" data-aos="fade-up">
							<td >18CS51</td>
							<td >3.00</td>
							<td ><center>23</center></td>
							<td ><center></center></td>
							<td ><center>22</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>46</center></td>
							<td ><center>B</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CS52</td>
							<td >4.00</td>
							<td ><center>20</center></td>
							<td ><center></center></td>
							<td ><center>22</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>4</center></td>
							<td ><center>4</center></td>
							<td ><center>42</center></td>
							<td ><center>B</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CS53</td>
							<td >3.00</td>
							<td ><center>24</center></td>
							<td ><center></center></td>
							<td ><center>25</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>49</center></td>
							<td ><center>A</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CS54</td>
							<td >4.00</td>
							<td ><center>25</center></td>
							<td ><center></center></td>
							<td ><center>25</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>50</center></td>
							<td ><center>A</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >20MCAE01</td>
							<td >3.00</td>
							<td ><center>24</center></td>
							<td ><center></center></td>
							<td ><center>25</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>49</center></td>
							<td ><center>B</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CS553</td>
							<td >3.00</td>
							<td ><center>24</center></td>
							<td ><center></center></td>
							<td ><center>23</center></td>
							<td ><center></center></td>
							<td ><center>333</center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>48</center></td>
							<td ><center>B</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CSL56</td>
							<td >1.00</td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>47</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>47</center></td>
							<td ><center>S</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18CSL57</td>
							<td >1.00</td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>47</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>47</center></td>
							<td ><center>S</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18HS52</td>
							<td >3.00</td>
							<td ><center>22</center></td>
							<td ><center></center></td>
							<td ><center>24</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>5</center></td>
							<td ><center>5</center></td>
							<td ><center>47</center></td>
							<td ><center>B</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
							<tr id="somerow">
							<td >18HS53</td>
							<td >0.00</td>
							<td ><center>29</center></td>
							<td ><center></center></td>
							<td ><center>29</center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center></center></td>
							<td ><center>39</center></td>
							<td ><center>PP</center></td>
							<td ><center>2021-01-01</center></td>
							</tr>
				</tbody>
			</table><font color="white">
		</font></div><font color="white">
	
	</div>
 

    <section class="ftco-section ftco-hireme img" style="background-image: url(images/bg_1.jpg)">
    	<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Address</h3>
		            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Website</h3>
		            <p><a href="#">yoursite.com</a></p>
	            </div>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
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
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
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