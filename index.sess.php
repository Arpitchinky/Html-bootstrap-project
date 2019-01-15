

<?php
session_start();

if (!isset($_SESSION['username'])){
 
}

?>



<!DOCTYPE html>
<html>
<head>
<lang="eng">
<title>AES</title>



<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
   #navbarSupportedContent ul li{
        font-size: 16px;
    }
</style>
</head>

<h1 style="color: pink" align="center">Gla University</h1>

<br>



<nav class="navbar navbar-expand-lg navbar-muted bg-dark">
  <a class="navbar-brand" href="home.sess.php"><i class="fas fa-home"></i>Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="news.sess.php"><i class="fas fa-newspaper"></i>News<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="reg.html"><i class="fas fa-user-plus"></i> Registration<span class="sr-only">(current)</span></a>
      </li>
       
       <li class="nav-item active">
        <a class="nav-link" href="about.sess.php"><i class="fas fa-book-reader"></i>About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin.sess.php"><i class="fab fa-amilia"></i></i>Admin<span class="sr-only">(current)</span></a>
      </li>



     
    </ul>

    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.sess.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

     </ul>   

  </div>
   
</nav>


<!--color bnd -->






<body>




<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="l.php" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="email" name="username" placeholder="Email" required class="form-control input-lg" >

          <br>

          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          <br>
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="reg.html">Create account</a> or <a href="forgotPassword.php">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">Arpit</a>
        </div>
      </section>  
      </div>
      
          
      </div>
  </div>
</body>





<!-- Footer -->
  <section id="footer">
    
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"> <i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope-square"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Hyderabad [a wholly owned subsidiary of India Telangna, Hyderabad]</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Arpit-tech</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->


</body>
</html>
