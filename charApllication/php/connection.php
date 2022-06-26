<?php
    $con = new mysqli("localhost","root","","chatingApp");

    if($con->connect_error){
        echo "Not connected to the database".$con->connect_error;
    }
?>