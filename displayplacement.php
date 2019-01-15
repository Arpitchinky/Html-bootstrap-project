<?php

include('conReg.php');





$sql = "SELECT id, com, tital,qual,des,loc,link FROM placement";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: ". $row["id"]. " - Name: ". $row["com"]. " " . $row["tital"] ." " .$row["qual"] ." ".$row["des"] ." ".$row["loc"] ." ".$row["link"] ." ";
        
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
</head>
<body>




</body>
</html>