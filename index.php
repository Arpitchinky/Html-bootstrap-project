<?php
include 'conReg.php';
// Always start this first


if ( !empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli($db_host, $db_username, $db_password, $db_ind);
        $stmt = $con->prepare("SELECT * FROM reg WHERE username = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->password ) ) {
            // session_start();
            // $_SESSION['user_id'];          

            // if(isset($_SESSION['user_id']))
            //     $_SESSION['user_id']=$_SESSION['user_id']+1;
            // else
            //     $_SESSION['user_id']=$myusername;
    		    header('location:news.sess.php');
    	}
    }
}
?>