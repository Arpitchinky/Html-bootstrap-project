<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mentoring</title>

<link rel="stylesheet" type="text/css" href="footer.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<h1 style="color: pink" align="center">Mentoring</h1>

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
        <a class="nav-link" href="mentoring.sess.php">Mentor<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="market.sess.php ">Marketing<span class="sr-only">(current)</span></a>
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



<body>


<div class="container" style="width: 500px;  height: 400px; border-radius: 10px; background: white;">
           <h2>Mentor/Mentee</h2>
            <form action="regi.php" method="post">

            <div class="form-group">
              <label for="name">Mentee Id:</label>
              <input type="text" class="form-control"  name="Cn" placeholder="Mentee Id:">
            </div>
            <div class="form-group">
             <label for="name" >Profile:</label>
             <input type="text" class="form-control"  name="Jt" placeholder="Profile:">
            </div>
             <div class="form-group">
              <label for="name">Education:</label>
              <input type="text" class="form-control" id="Qn" placeholder="Education:">
             </div>
             <div class="form-group">
               <label for="name">Goals:</label>
               <input type="text" class="form-control" id="Jd" placeholder="Goals:">
              </div>

              

               <button type="submit" class="btn btn-default">Submit</button>
              </form>
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
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Arpittech</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->

  <!-- ./Footer -->
</html>