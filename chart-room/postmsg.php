<?php
include 'connection.php';

  $text = $_POST['text'];
  $room = $_POST['room'];
  $ip = $_POST['ip'];

  $sql = "INSERT INTO `messege`(`msg`, `ip`, `room`, `stime`) VALUES ('$text', '$ip', '$room', current_timestamp());";
  mysqli_query($conn,$sql);
  mysqli_close();
  
?>