<?php
session_start();
  include "connection.php";
  $outGoingId = $_SESSION['unique_id'];
  $sql = mysqli_query($con, "SELECT * FROM users WHERE NOT unique_id = '$outGoingId'");
  $output = "";

  if(mysqli_num_rows($sql) == 1){
      $output .= "No Users Available to Chat";
  }else if(mysqli_num_rows($sql) > 0){
     include "data.php";
  }

  echo $output;
?>
