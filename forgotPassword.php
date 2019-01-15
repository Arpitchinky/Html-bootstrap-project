<?php

// Import PHPMailer classes into the global namespace
		// These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

require 'include_mailer/PHPMailer/src/Exception.php';
require 'include_mailer/PHPMailer/src/PHPMailer.php';
require 'include_mailer/PHPMailer/src/SMTP.php';

$connection = new mysqli("localhost", "root", "", "dba");

if($_POST){
	$myusername = $_POST["username"];

	$query = mysqli_query($connection, "SELECT * from reg where username ='$myusername'") or die(mysqli_error($connection));
	$count = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);

	

	if($count > 0){

		//echo "Your password is " .$row['Password'];
		
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'aarpitchaurasia365@gmail.com';                 // SMTP username
		    $mail->Password = 'arpit8874168155';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('aarpitchaurasia365@gmail.com', 'Arpit Chaurasia');
		    $mail->addAddress($myusername, $myusername);     // Add a recipient
		    
		   
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Forgot Password';
		    $mail->Body    = 'Hi' .$myusername.'..! This is your password : '.$row['password'];
		    $mail->AltBody = 'Hi' .$myusername.'..! This is your password : '.$row['password'];

		    $mail->send();
		    echo 'Your password has been sent on your Email ID';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}

		

	}else {
		echo "Please enter your valid email!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Forgot Password
	</title>

<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
     <h1 style="color: white" align="center">Gla University</h1>
      <br>



      <nav class="navbar navbar-expand-lg navbar-muted bg-dark">
      <a class="navbar-brand" href="home.sess.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
       <li class="nav-item active">
        <a class="nav-link" href="reg.html "> Registration<span class="sr-only">(current)</span></a>
      </li>
      
       <li class="nav-item active">
        <a class="nav-link" href="admission.sess.php ">Adjunct<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="about.sess.php">About<span class="sr-only">(current)</span></a>
      </li>
     
       </ul>
       
     <ul class="nav navbar-nav navbar-right">
     <li><a href="index.sess.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
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
	<div class="container" width="50%" height="20%">
		

	<form action="forgotPassword.php" method="post">
		<!--<input type="text" name="username" placeholder="Email"><br>
		<input type="submit" name="forgotPass" value="Request Password"/>-->


		 <div class="form-group">
              <label for="email" style="color: white">Email:</label>
              <input type="email" class="form-control" name="username" placeholder="Enter Email"><br>
             
            
             <button type="Submit" class="btn btn-success" name="forgotpass" value="Request Password">forgotPassword
             </button>
	</form>
	</div>
  </div>
  

    <section id="footer">
    <div class="container">
      
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
</body>



</html>