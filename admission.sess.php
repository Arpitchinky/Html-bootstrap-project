<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admission</title>


<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
<style type="text/css">
   #navbarSupportedContent ul li{
        font-size: 16px;
    }
</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<h1 style="color: pink" align="center">Admission cell</h1>

<br>

<nav class="navbar navbar-expand-lg navbar-muted bg-dark">
  <a class="navbar-brand" href="home.sess.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="news.sess.php">News<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="reg.html "> Registration<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="market.sess.php">Marketing<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="funding.sess.php">Funding<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="mentoring.sess.php">Mentoring<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="Adjunct.sess.php">Adjunct<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="about.sess.php">About<span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
   
  </div>
    <div class="ser">
        <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
</nav>




 </head>
 <body>
 	        
    <div class="container">
  <div class="row align-items-start">
    <div class="col-sm-6">
    	 <h3 style="margin-top: 20px; color: white">Welcome to Hindustan</h3>
     
      <img class="mySlides" src="images/22.jpg" style="width:100%" height="300px">
    </div>
       
<div class="col-sm-6">
      <h3 style="margin-top: 20px; color: white">About The College</h3>




<p style="text-align: justify;color: black;">Hindustan College of Science &amp; Technology is situated at the 26 km milestone from Agra on the Agra-Delhi Highway (NH-2). It is housed in a grand complex with 1,00,000 sq.mts of covered area built on a plot of <strong>34 acres</strong>.<br />
This college is amongst the first self financed colleges in North India, affiliated to 
Dr. APJ Abdul Kalam Technical University (AKTU), Lucknow and approved by All India Council for Technical Education 
(AICTE), New Delhi. <strong>HCST</strong> 
offers Bachelor Degree in various branches of Engineering and Masters degree in Management &amp; Engineering. Most of the programmes are accredited by the <strong>National Board of Accreditation (NBA)</strong>.<br />
Hindustan College of Science and Technology is awarded for its high quality of&nbsp; learning processes,
 amenities &amp; excellence when compared, amongst the best colleges of the country.</p>
 </div>
</div>
</div>

<div  class="segment clearfix heading"><div class="segment-content" align="center">
           <div class="heading2 separator"><h2 class="title" style="color: white">Take a campus tour</h2><div class="pitch" style="color: black">Our campus have a lot to offer for our students; feel free to call us to book a visit.</div></div>





<div class="container">
  <div class="row">
	<div class="col-md-6">
	<hr>

	<h3>
	Library
	</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="853" height="480" src="https://www.youtube.com/embed/neKaXXXKtHE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	
	<hr>
	<h3>
	Sports
	</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="853" height="480" src="https://www.youtube.com/embed/QQI7foZMPtE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	</div><!-- /col -->





	<div class="col-md-6">
	
	<hr>
	<h3>
	Activities
	</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe src="//player.vimeo.com/video/22428395"></iframe>
	</div>
	
	<hr>
	<h3>
	placements
	</h3>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe src="//player.vimeo.com/video/22428395"></iframe>
	</div>
	</div><!-- /col -->
</div>
</div>
 </body>


<!--footer-->
    <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Admissions</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Admissions 2018 - 19</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>International Admissions 2018 - 19</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Scholarship</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fee Deposit</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Top Engineering Courses</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Alumni</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Entrepreneurship</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Certificate Authentication</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Media</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>TV Ads</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Media Coverage</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of India, Inc. Hyderabad [a wholly owned subsidiary of india. Telangna, Hyderabad]</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Arpit-tech</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
  <!-- ./Footer -->









 </html>