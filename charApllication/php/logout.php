<?php
     session_start();
     if(isset($_SESSION['unique_id'])){//check user is login ot not
          include 'connection.php';
          $logout_id = mysqli_real_escape_string($con, $_GET['logout_id']);
          if(isset($logout_id)){
               $status = 'Offline';
               $sql = mysqli_query($con, "UPDATE users SET status = '$status' WHERE unique_id = '$logout_id'");

                if($sql){
                    session_unset();
                    session_destroy();
                    header("location:../login.php");
                 }

              }else{
               header("location:../users.php");
          }
          
     }else{
          header("location:../login.php");
     }

     session_destroy();
     header("location:../login.php");
?>