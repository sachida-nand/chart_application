<?php 
  $user = 'root';
  $password = '';
  $host = 'localhost';
  $db = 'chartroom';

  $conn = mysqli_connect($host,$user,$password,$db);

  if(!$conn){
      die("faid to connect".mysqli_connect_error());
  }
?>