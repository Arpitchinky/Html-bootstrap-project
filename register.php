<?php
include 'conReg.php';


$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["username"];
$pwd = $_POST["password"];
$cpw =$_POST["cpwd"];



if($pwd==$cpw){




$qe = mysqli_query($mysqli,"INSERT INTO reg (firstname,lastname,username,password) 
      VALUES('$fname', '$lname','$email','$pwd')");
if($qe)
   
    {
   
    header ("location:index.sess.php");
   
}else{
    echo 'Data not inserted';
}

}else{
   echo "password do not match";
}
   


?>