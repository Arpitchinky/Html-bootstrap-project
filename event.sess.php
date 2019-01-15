<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Events</title>

<style>
  .container{
    outline: 1px solid white;
  }
   #navbarSupportedContent ul li{
        font-size: 16px;
    }

</style>

<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
       <!--slide-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<h1 style="color: pink" align="center">Campus Events</h1>

<br>



<nav class="navbar navbar-expand-lg navbar-muted bg-dark">
  <a class="navbar-brand" href="home.sess.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="about.sess.php">About<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="admission.sess.php">Admission<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="acadmics.sess.php">Acadmics<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="placement.sess.php">Placement<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="campus.sess.php">CampusLife<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="Adjunct.sess.php">Adjunct<span class="sr-only">(current)</span></a>
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


<div class="container">
  <h1 style="color:red" align="center">EVENTS AT GLA</h1> 
  <hr> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/28.jpg" alt="Los Angeles" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="images/ca1.jpg" alt="Chicago" width="100%" height="100%">
      </div>
    
      <div class="item">
        <img src="images/abanti.jpg" alt="New york" width="100%" height="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<hr>
          <h1 style="color: red" align="center" >BROWSE PAST EVENTS</h1>
          <h3 style="color: white" align="center">At India's most Happening Campus</h3>

<div class="container">
  <div class="row">
    <div class="col-6">
      
     <h2 style="color: pink">3rd CONVOCATION 23rd june, 2018</h2>
     <ul>
      <h4>
     <li>It was a moment of pride when the President of India Mr.Pranab Mukherjee along with the President of Afganistan Mr.Hamid Karzai and Chief minister of Punjab S. Prakash Singh Badal Awarded degrees to the 
     graduates.</li>
     <li>
       Afghan President Hamid Karzai, left, is greeted by his Indian counterpart Pranab Mukherjee after he received an honorary degree at the Lovely Professional University in Jalandhar, India, Monday, May 20, 2013. Karzai will seek increased military aid from India during a three-day visit starting Monday and will discuss recent cross-border clashes with Pakistan, India's archrival, an aide said.
     </li></h4>
   </ul>
   </div>
    <div class="col-6">
     <img class="m-5" src="images/ga.jpg" width="350" height="200">
      </div>
  </div>

 <div class="row">
    <div class="col-6">
      
     <h2 style="color: pink"> Madhya Pradesh Organizes Plays on the Life of Mahatma Gandhi on 23rd August, 2018</h2>
     <ul>
      <h4>
        <ul>
          <li>To commemorate the 150th Birth Anniversary of Mahatma Gandhi and following the UGC mandate to organize plays on the life of the Father of the Nation,03 plays were staged in the University Auditorium from 11 AM on 23 Aug 2018.</li>
          <li>
            The students enthusiastically participated in the plays in which they showcased various incidents from the Mahatma’s life and attempted depiction of his ideology through the medium of drama
          </li>
            </h4>

        </ul>
      
   </div>
    <div class="col-6">
     <img  class = "m-5" src="images/gandhi.jpg" width="350" height="200">
      </div>
      </div>

      <div class="row">
    <div class="col-6">
      
     <h2 style="color: pink">Dr.James Carson, The University of Waikato delivers lecture at Amity 23rd December, 2018</h2>
     <ul>
      <h4>
        <ul>
          <li>Addressingthe gathering, Dr. James Carson shared that New Zealand has land andclimate ideal for farming. He apprised that food exports is critical to NewZealand’s economy since about 45% of export earnings are from food products butdue to geographical isolation, the major challenge in food export is to ensurethat food arrives at it’s destination in a sale-able state. He pointed that theCountry’s export cold chains are some of the longest in the world and is veryvital for the economy. He remarked that continual adaptation and improvementare required in order to remain competitive..</li>
          <li>
            The students enthusiastically participated in the plays in which they showcased various incidents from the Mahatma’s life and attempted depiction of his ideology through the medium of drama
          </li>
            </h4>
          </ul>
      
   </div>
    <div class="col-6">
     <img  class = "m-5" src="images/dc.jpeg" width="350" height="300">
      </div>
      </div>
       <div class="row">
    <div class="col-6">
      
     <h2 style="color: pink">Thousands of Amitians celebrate 72nd Independence Day at Amity University 15th August, 2018</h2>
     <ul>
      <h4>
        <ul>
          <li>Duringthe occasion, students presented a colorful cultural extravaganza of soulsoothing dance performances and melodious patriotic songs including Ae Watan,Ae Mere watan ke logo, Desh mere desh mere- meri jaan hai tu, Suno gaur seduniya walo, saare jahan se acha and many more. The brilliant performers andbest dressed as per day’s theme were also awarded.</li>
          <li>
            The students enthusiastically participated in the plays in which they showcased various incidents from the Mahatma’s life and attempted depiction of his ideology through the medium of drama
          </li>
            </h4>
          </ul>
      
   </div>
    <div class="col-6">
     <img  class = "m-5" src="images/ind_2.jpg" width="350" height="300">
      </div>
      </div>




  <div class="row">
  <div class="col-md-6">
  <hr>

  <h3>
  Library
  </h3>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe width="853" height="480" src="https://www.youtube.com/embed/neKaXXXKtHE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
 </div><!-- /col -->
<div class="col-md-6">
  <hr>
 <h3>
  Library
  </h3>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe width="853" height="480" src="https://www.youtube.com/embed/neKaXXXKtHE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  
  
  </div><!-- /col -->


      </div>




</div>
	
</body>



<!-- Footer -->
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