<?php
session_start();

if (!isset($_SESSION['username'])){
 header('location:login_err.html');
}

?>

<!--html part -->

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Css Part images hover-->
<style type="text/css">
  

      .btn-read {
        background: transparent;
        border-radius: 0;
        border: 1px solid #ffffff;
        color: #fff;
    }
  .section-box-one{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-one figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-one img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-one:hover img{
        transform: translate(100%, -100%);
        -webkit-transform: translate(100%, -100%);
        -moz-transform: translate(100%, -100%);
    }

    .section-box-two{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-two figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-two img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-two:hover img{
        transform: translate(-100%, -100%);
        -webkit-transform: translate(-100%, -100%);
        -moz-transform: translate(-100%, -100%);
    }

    .section-box-three{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-three figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-three img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-three:hover img{
        transform: translate(-100%, 100%);
        -webkit-transform: translate(-100%, 100%);
        -moz-transform: translate(-100%, 100%);
    }

    .section-box-four{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-four figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-four img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-four:hover img{
        transform: translate(-100%,0);
        -webkit-transform: translate(-100%,0);
        -moz-transform: translate(-100%,0);
    }

    .section-box-five{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-five figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-five img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-five:hover img{
        transform: translate(100%,0);
        -webkit-transform: translate(100%,0);
        -moz-transform: translate(100%,0);
    }

    .section-box-six{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-six figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-six img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-six:hover img{
        transform: translate(0,-100%);
        -webkit-transform: translate(0,-100%);
        -moz-transform: translate(0,-100%);
    }

    .section-box-seven{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-seven figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-seven img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-seven:hover img{
        transform: scale(0);
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        opacity: 0;
    }

    .section-box-eight{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
        transform: rotateY(-180deg);
        transition: ease-in-out .5s;
    }
    .section-box-eight:hover {
        transform: rotateY(0deg);
    }
    .section-box-eight:hover img {
        transform: rotateY(-180deg);
        backface-visibility: hidden;
        transition: ease-in-out .5s;
    }
    .section-box-eight figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-eight img{
        height: 100%;
        position: absolute;
    }

    .section-box-nine{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-nine figure {
        position: absolute;
        text-align: center;
        padding: 19px;
        width: 100%;
        height: 100%;
    }
    .section-box-nine img{
        height: 100%;
        position: absolute;
        transition: ease-in-out .5s;
        -webkit-transition: ease-in-out .5s;
        -moz-transition: ease-in-out .5s;
    }
    .section-box-nine:hover img{
        transform: scale(3);
        -webkit-transform: scale(3);
        -moz-transform: scale(3);
        opacity: 0;
    }

    .section-box-ten{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-ten figure {
        position: absolute;
        text-align: left;
        padding: 10px 19px 19px 19px;
        width: 100%;
        height: 100%;
        border-top: 1px solid #fff;
        background: rgba(0, 0, 0, 0.71);
        bottom: -80%;
        transition: ease-in-out .5s;
    }
    .section-box-ten:hover figure {
        bottom: 0;
    }
    .section-box-ten figure h3{
        margin: 0;
        padding-bottom: 10px;
    }
    .section-box-ten img{
        height: 100%;
    }


    .section-box-eleven{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-eleven figure {
        position: absolute;
        padding: 10px 15px;
        width: 100%;
        bottom: -25%;
        transition: ease-in-out .5s;
        background: rgba(0, 0, 0, 0.71);
        border-top: 1px solid #fff;
    }
    .section-box-eleven:hover figure {
        bottom: 0;
    }
    .section-box-eleven img{
        height: 100%;
    }

    .section-box-twelve{
        height: 250px;
        background: radial-gradient(#6e6e6e,#2f2f2f);
        background: -webkit-radial-gradient(#6e6e6e,#2f2f2f);
        background: -moz-radial-gradient(#6e6e6e,#2f2f2f);
        color: #fff;
        position: relative;
        overflow:hidden;
    }
    .section-box-twelve figure {
        position: absolute;
        text-align: center;
        padding: 10px 19px 19px 19px;
        width: 100%;
        height: 100%;
        transition: ease-in-out .5s;
        opacity: 0;
        transform: scale(2);
    }
    .section-box-twelve:hover figure {
        opacity: 1;
        transform: scale(1);
        background: rgba(0, 0, 0, 0.71);
    }
    .section-box-twelve figure a{
        color: #fff;
        font-size: 3em;
        top: 35%;
        position: relative;
    }
    .section-box-twelve img{
        height: 100%;
    }
    #navbarSupportedContent ul li{
        font-size: 16px;
    }
</style>
</head>
<h1 style="color: pink" align="center">HOME</h1>
<!-- Navbar Part -->

<body>

<nav class="navbar navbar-expand-lg navbar-muted bg-dark">
  <a class="navbar-brand" href="home.sess.php"><i class="fas fa-home"></i>Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="news.sess.php ">News<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="reg.html "> Registration<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="market.sess.php ">Marketing<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="funding.sess.php">Funding<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="mentoring.sess.php">Mentoring<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="admission.sess.php">Admission<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="about.sess.php">About<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="placement.sess.php">Placement<span class="sr-only">(current)</span></a>
      </li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
     </ul>   
     </div>
   <div class="ser">
        <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>

    <!--images scrolling part-->

      <div class="container-fluid" style="margin-top:-12px; ">
     
      <div class="w3-content w3-section" id="im" style="width:100%">
      <img class="mySlides" src="images/16.jpg" style="width:100%" height="350px">
      <img class="mySlides" src="images/17.jpg" style="width:100%" height="350px">
      <img class="mySlides" src="images/18.jpg" style="width:100%" height="350px">
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
</div>

<br>
          <!--panel part in HTML 5 -->

        <div class="container">
           <div class="row">
             <div class="col-md-8">
                <div class="panel panel-primary ">
                   <div class="panel-heading">PROJECTS</div>
                     <div class="panel-body">
                       <div class="col-md-5">
                          <img src="images/17.jpg" width="100%" height="100%">

                           <h4 style="color: red">Value Of projects</h4>
                             <ul>
                              <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                              Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                           <img src="images/17.jpg" width="100%" height="100%">
                            <h4 style="color: red">Value Of projects</h4>
                             <ul>
                              <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                              Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
      
                 <div class="col-md-4">
                    <div class="panel panel-primary ">
                       <div class="panel-heading">Announcement</div>
                         <div class="panel-body">
                           <ul>
                             <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                             Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                             <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                              Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                              <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                              Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                             <li>One post of Project Fellow is to be filled up on purely temporary basis for a DST- SERB Project
                              Department of Anatomy, Dr.ALMPGIBMS, University of Madras. Taramani, Ch-113 </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

          <!--images hover part -->

    <div class="container">
        <h1 class="text-center">TAKE A CAMPUS TOUR</h1>
        <hr>

            <div class="col-md-4 center-block">
                <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3>Campus Life</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="images/28.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-two">
                    <!---->
                    <figure>
                        <h3>Tours</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Placements</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.ayushmaantechnologies.com/wp-content/uploads/2017/01/5-things-to-consider-when-selecting-a-web-design-agency-1.jpg" class="img-responsive"/>
                </div>
            </div>
            <div> </div>
            <div class="col-md-4 center-block">
                <div class="section-box-four">
                    <!---->
                    <figure>
                        <h3>Library</h3>
                        <p>Collection of the Central Library has grown up to more than 1,19,738 books and more than 1000 bound Journals / Periodicals. The collection mainly focuses on Science & Technology. We are currently involved in utilizing the network information through access to DELNET, INTERNET, OPAC etc.</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="images/26.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-five">
                    <!---->
                    <figure>
                        <h3>Faculty</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-six">
                    <!---->
                    <figure>
                        <h3>Activities</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.ayushmaantechnologies.com/wp-content/uploads/2017/01/5-things-to-consider-when-selecting-a-web-design-agency-1.jpg" class="img-responsive"/>
                </div>
            </div>
            <div> </div>
            <div class="col-md-4 center-block">
                <div class="section-box-seven">
                    <!---->
                    <figure>
                        <h3>Sports</h3>
                        <p>The students have been representing the college at various State level, National level competitions and won 06 gold, 14 silver and 22 bronze Medals in All India Technical Sports Meet held at Modi Institute of Technology & Research , Sikar (Raj) and Inter Collegiate Sports Meet of Dr. APJ Abdul Kalam Technical University, Lucknow held at B.I.E.T, Jhansi.</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="images/sports.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-eight">
                    <!---->
                    <figure>
                        <h3>Hostel</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-4 center-block">
                <div class="section-box-nine">
                    <!---->
                    <figure>
                        <h3>Service</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        <a href="#" class="btn btn-read">Read More</a>
                    </figure>
                    <img src="http://www.ayushmaantechnologies.com/wp-content/uploads/2017/01/5-things-to-consider-when-selecting-a-web-design-agency-1.jpg" class="img-responsive"/>
                </div>
            </div>
            <div> </div>
            </div>
          
            <div> </div>
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
</html>