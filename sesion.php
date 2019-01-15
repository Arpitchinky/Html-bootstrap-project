<?php
   include('conReg.php');
   session_start();

   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"SELECT * from `reg` where `username` = $user_check");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $_SESSION['username'] = $login_session;
   
   if(!isset($_SESSION['username'])){
      header("location:index.sess.php");
   }else {
      header("location:news.sess.php");
   }
?>