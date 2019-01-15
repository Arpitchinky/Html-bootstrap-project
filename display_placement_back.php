<?php

include('conReg.php');





$sql = "SELECT *  FROM placement"; //id, com, tital,qual,des,loc,link
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    //Declare an array and store the result in associative array
    $array = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: ". $row["id"]. " - Name: ". $row["com"]. " " . $row["tital"] ." " .$row["qual"] ." ".$row["des"] ." ".$row["loc"] ." ".$row["link"] ." ";
    $array['id'] = $row['id'];
    $array['com'] = $row['com'];
    $array['tital'] = $row['tital'];
    $array['qual'] = $row['qual'];
    $array['des'] = $row['des'];
    $array['loc'] = $row['loc'];
    $array['link'] = $row['link'];

   //print_r($array);
    }
} else {
    echo "0 results";
}

$mysqli->close();

?>


<!DOCTYPE html>
<html>
<head>
	<title>DisplayPlacement</title>
	<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">




	
</head>
<body>

	<h1>Gla University</h1>

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


     
    </ul>

    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.sess.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>

     </ul>   

  </div>
   
</nav>

<!--
<table rules="all" border="2px" style="color:white                  width="500px" height="500px">
		<tbody>
			<tr>
				<td>Id</td>
				<td><?php echo $array['id']; ?></td>
			</tr>
			<tr>
				<td>C.Name</td>
				<td><?php echo $array['com']; ?></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><?php echo $array['tital']; ?></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><?php echo $array['qual']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $array['des']; ?></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><?php echo $array['loc']; ?></td>
			</tr>
			<tr>
				<td>Job Link</td>
				<td><?php echo $array['link']; ?></td>
			</tr>
		</tbody>
	</table>

</body>

-->



<div class="container">
  <h2>PlacementDetails</h2>
         
  <table class="table table-striped">
    
    <tbody>
      <tr>
      	           <th>Id</th>
				<td><?php echo $array['id']; ?></td>
			</tr>
			<tr>
				 <th>Company Name</th>
				
				<td><?php echo $array['com']; ?></td>
			</tr>
			<tr>
				<th>Job Title</th>
				
				<td><?php echo $array['tital']; ?></td>
			</tr>
			<tr>
				 
                <th>Qualification</th>
				<td><?php echo $array['qual']; ?></td>
			</tr>
			<tr>
				<th>Job Discription</th>
				
				<td><?php echo $array['des']; ?></td>
			</tr>
			<tr>
				 <th>Job Location</th>
			
				<td><?php echo $array['loc']; ?></td>
			</tr>
			<tr>
				  <th>Job Link</th>
				<td><?php echo $array['link']; ?></td>
			</tr>

    </tbody>
  </table>
</div>



<!--footer-->

<br>

  <section id="footer">
    <div class="container">
      
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
</html>