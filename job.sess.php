<?php
  
 include 'conReg.php';

if($_POST['submit']){


$fn = $_POST['FName'];
$ln = $_POST['LName'];
$em = $_POST['Email'];
$por = $_POST['Portfolio'];
$pos = $_POST['Position'];
$sla= $_POST['Salary'];
$sta= $_POST['StartDate'];
$ph= $_POST['Phone'];
$fx= $_POST['Fax'];
$re= $_POST['Relocate'];
$org= $_POST['Organization'];
$ref= $_POST['Reference'];


$query="INSERT INTO jobs(FName,LName,Email,Portfolio,Position,Salary,StartDate,Phone,Fax,Relocate,Organization,Reference) 
                      VALUES('$fn', '$ln', '$em', '$por', '$pos', '$sal','$sta','$ph'
                      ,'$fx','$re','$org','$ref')";

$result = mysqli_query($mysqli,$query);



//$query = "INSERT INTO placement (com, tital,qual,des,loc,link,) values ('$CN','$JT','$QUA','$JD','$JC','$JL')";

if(!$result){
	echo "Data not inserted.";
}else {
	echo "Data inserted";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs Details</title>
</head>
<body>

	<h2>View Details</h2>

	<a href="display_placement_back.php">View Details</a> 



</body>
</html>