<?php
  
 include 'conReg.php';


$CN = $_POST['com'];
$JT = $_POST['tital'];
$QUA = $_POST['qual'];
$JD = $_POST['des'];
$JC = $_POST['loc'];
$JL= $_POST['link'];




$qu = mysqli_query($mysqli, "INSERT INTO placement (com,tital,qual,des,loc,link) 
                      VALUES('$CN', '$JT', '$QUA', '$JD', '$JC', '$JL')");



//$query = "INSERT INTO placement (com, tital,qual,des,loc,link,) values ('$CN','$JT','$QUA','$JD','$JC','$JL')";

if($qu){
	echo "Data inserted";
}else {
	echo "Data not inserted.";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>view Details</title>
</head>
<body>

	<h2>View Details</h2>

	<a href="display_placement_back.php">View Details</a> 



</body>
</html>