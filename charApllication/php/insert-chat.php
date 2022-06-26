<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
     include "connection.php";
     $outGoingId = mysqli_real_escape_string($con, $_POST['out_going_id']);
     $inComingId = mysqli_real_escape_string($con, $_POST['in_coming_id']);
     $message = mysqli_real_escape_string($con, $_POST['message']);

     if(!empty($message)){
         $sql = mysqli_query($con, "INSERT INTO messages (out_going_id,in_coming_id,message) VALUES ('$outGoingId','$inComingId','$message')");
     }
 
  }else{
      header("location:login.php");
  }   
 
?>
