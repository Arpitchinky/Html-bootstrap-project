<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gla University</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  
  <h2 style="color: pink" align="center">GLA AES</h2>

</head>

<br>

  <nav class="navbar navbar-expand-lg navbar-muted bg-dark">
      <a class="navbar-brand" href="home.sess.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">ChairmanMessage<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="news.sess.php">News<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="event.sess.php ">Events<span class="sr-only">(current)</span></a>
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
         <br>
         


<body>
<div class="container">
<div class="row">
<div class="col-sm-4" style="background-color:#fff;">
     
        <div class="customDiv">
        <h2>EVENTS AT GLA</h2>
    
          
          <marquee direction="up"><li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</li>
          <br>
            <li> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</li>
          <br>
          <li> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</li>
          <br>

           </marquee>
         </div>

      </div>



     
  <div class="col-sm-4" style="background-color:silver;">
      <h2>CHAIRMAN</h2>
      <div class="w3-content w3-section" id="im" style="max-width:550px">
      <img class="mySlides" src="images/abanti.jpg" style="width:100%" height="250px">
      <img class="mySlides" src="images/Aba.jpg" style="width:100%" height="250px">
      <img class="mySlides" src="images/g.jpg" style="width:100%" height="250px">
      </div>


      <script> 
      var myIndex = 0;
      carousel();

      function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

     <h3>Chairman Message</h3>
     Our vision is based on hard work, open communication, a strong emphasis on team work and a high level of responsibility. This visionary culture allows and emphasises our wards not only to adopt the present day challenges but also individual responsibilities to the society and our nation at large.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       <br>
      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>

    </div>

    <div class="col-sm-4" style="background-color:#fff;">
   
        <div class="customDiv">
          <h2>COLLEGE ACHIEVMENTS</h2>
          <br>
          <li>
          Granted Autonomous Status by Commission on Higher Education (CHED)</li>
          <li>
            Granted Institutional Quality Assurance through Monitoring and Evaluation (IQuAME) Category A-Teaching Status by CHED</li>
          <li>
            ISO 9001:2008 Certified by Societe General de Surveillance</li>
          <li>
            Philippines' First Educational Institution certified Investors in People (Bronze Award)</li>

             <img  src="images/13.jpg" style="width:100%" height="200px">

         
            </div> 
         

    </div>

  
    </div>
  </div> 


</body>


<br>


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


</html>
