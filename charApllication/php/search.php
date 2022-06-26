<?php
    session_start();
    include "connection.php";
     $outGoingId = $_SESSION['unique_id'];
    $searchValue = mysqli_real_escape_string($con, $_POST['searchValue']);
    $output = "";
    
    $sql = mysqli_query($con, "SELECT * FROM users WHERE NOT unique_id = '$outGoingId' AND (fName LIKE '%{$searchValue}%' or lName LIKE '%{$searchValue}%')");

    if(mysqli_num_rows($sql) > 0){
          include "data.php";
    }else{
        $output .= "Users not found for this name";
    }
    echo $output;
?>