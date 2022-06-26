<?php
    include "connection.php";
    session_start();

    $fName = mysqli_real_escape_string($con, $_POST['fname']);
    $lName = mysqli_real_escape_string($con, $_POST['lname']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    
    $encriptPass = password_hash($pass,PASSWORD_BCRYPT);

    $email = mysqli_real_escape_string($con, $_POST['email']);
    // $img = mysqli_real_escape_string($con, $_FILES['image']);


    if(!empty($fName) && !empty($lName) && !empty($pass) && !empty($email))
    {
          $sql = mysqli_query($con,"SELECT * FROM users WHERE email = '{$email}'");
          if(mysqli_num_rows($sql) > 0){
              echo "Email Already exits";
          }else{
              if(isset($_FILES['image'])){
                   $img_name = $_FILES['image']['name'];
                //    $img_type = $_FILES['image']['type'];
                   $tmp_name = $_FILES['image']['tmp_name'];


                   //expload image and get last extension like jpeg

                   $img_expload = explode('.',$img_name);
                   $img_ext = end($img_expload); // here we get the extension of an users uploaded file

                   $extension = ['png','jpeg','jpg'];

                   if(in_array($img_ext,$extension) === true){
                       $time = time(); //this return current time
                                       // we need this time bcz when user upload img in our folder then rename its name with current time  so all name are unique.
                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_name, "../uploads/".$new_img_name)){ //if user upload ing its move to our folder successfull
                            $satus = "Active now"; // once user signed up then his status will be active now
                            $random_id = rand(time(),100000000);// creating random id for users

                            // let insert data into users table 

                            $insertQuery = mysqli_query($con, "INSERT INTO users (unique_id,fName,lName,email,passWord,img,status) VALUES('$random_id','$fName','$lName','$email','$encriptPass','$new_img_name','$satus')");

                            if($insertQuery){
                                $sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql2) > 0 ){
                                    $row = mysqli_fetch_array($sql2);
                                    $_SESSION['unique_id'] = $row['unique_id'];// using this session we used user unique_id in other php file
                                    echo "success";
                                }
                            }
                        }
                   }else{
                       echo "plaese select an img file";
                   }

              }else{
                  echo "plaese select an img file";
              }
          }

    }else{
        echo "All field are required";
    }
?>