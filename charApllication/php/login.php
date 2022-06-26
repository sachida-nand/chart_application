<?php
    
    session_start();
    include "connection.php";

    $email = mysqli_escape_string($con, $_POST['email']);
    $pass = mysqli_escape_string($con, $_POST['password']);

    if(!empty($email)){
        if(!empty($pass)){
            $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'"); //find email in our record
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_array($sql);
            
            if(password_verify($pass,$row['passWord'])){ //match password from our record
                
               $sql2 = mysqli_query($con, "UPDATE users SET status = 'Active now' WHERE unique_id = {$row['unique_id']}");
              if($sql2){
                  $_SESSION['unique_id'] = $row['unique_id']; //if password found then allocate session variable
                  echo "success";
                  } 
               }else{
                  echo "Password Not Matched";
             }    
         }else{
            echo "Email Not found signup Now";
         }

        }else{
            echo "Enter your Password";
        }

    }else{
        echo "Enter your Email and Password";
    }


?>