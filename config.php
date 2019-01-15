<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'dba');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if ($db) {
	//echo "Connection ok"; to show the connection 
}
else{
	//echo "Connection faild"; // only see the connection faild

  // here we check what region to faild my connection 
	// very good connection faild message 

	die("Connection faild because".mysqli_connect_error());
}


?>