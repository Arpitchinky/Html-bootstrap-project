<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="footer.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
   #navbarSupportedContent ul li{
        font-size: 16px;
    }
</style>
</head>
<h1 style="color: pink" align="center">About Us</h1>

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
        <a class="nav-link" href="mentor.sess.php">Mentor<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="market.sess.php">Marketing<span class="sr-only">(current)</span></a>
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
<!--about Us-->

<div class="university_moto">
  <div class="container">
    <div class="text-header">
      <h2>About Us</h2>
    </div>
    <div class="row">
      <div class="col-sm-4 col-lg-4 col-md-4 about_img">
        <img src="images/moto.png" alt="About Us Image">
      </div>
      <div class="col-sm-8 col-lg-8 col-md-8 about_des">
        <h3 class="title" style="color: white">University Moto</h3>
        <p><strong>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. </strong>
        </p>
      </div>
    </div>
  </div>
</div>


<!-- images-->

<div class="pgm_ser">
  <div class="container">
    <h3 style="color: white">Programs and Services</h3>


    <div class="row">
      <div class="col-sm-3 col-lg-3 col-md-3 job_offer">
        <img src="images/job.png" alt="Job Offer Image" width="80%" height="50%">
        <h3 style="text-align: center; color: white;">Job Offer</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution. 
        </p> 
      </div>

      <div class="col-sm-3 col-lg-3 col-md-3 event_desc">
        <img src="images/6f.jpg" alt="Event Calender" width="80%" height="50%">
        <h3 style="text-align: center; color: white;">Event Calender</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
        </p>
      </div>
      
      <div class="col-sm-3 col-lg-3 col-md-3 fund">
        <img src="images/fund.jpg" alt="Fund Image" width="80%" height="50%">
        <h3 style="text-align: center; color: white;">Fund Donation</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
          
        </p>

      </div>
      <div class="col-sm-3 col-lg-3 co-md-3 edu">
        <img src="images/edu.png" alt="Educational Image" width="80%" height="50%">
        <h3 style="text-align: center; color: white;">Education</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution. 
          
        </p>
      </div>
    </div>
  </div>
</div>
<!-- ===================== end of programme and services section===================== -->
<!--goal and -->
<hr>


<h2 style="color: red;" align="center">Our Mission</h2>
<div class="text-center text-white">
<p>To provide high quality, student-centered education and lifelong learning opportunities for the communities we serve.</p>
<p>At <strong>Hindustan College of Science &amp; Technology</strong>, students pursue their goals in an environment that values diversity, individuality, mutual respect and free exchange of ideas.</p>
</div>
</div><!-- .segment-->


                    
               







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
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Arpittech</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->




</html>