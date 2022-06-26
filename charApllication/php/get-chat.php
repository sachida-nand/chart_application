<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
     include "connection.php";
     $outGoingId = mysqli_real_escape_string($con, $_POST['out_going_id']);
     $inComingId = mysqli_real_escape_string($con, $_POST['in_coming_id']);
     $output = "";
     
     $sql = "SELECT * FROM messages
        LEFT JOIN users ON users.unique_id = messages.in_coming_id
      WHERE (out_going_id = '{$outGoingId}' AND in_coming_id = '{$inComingId}') OR (out_going_id = '{$inComingId}' AND in_coming_id = '{$outGoingId}') ORDER BY msg_id ASC ";

     $query = mysqli_query($con, $sql);

     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_array($query)){
             if($row['out_going_id'] == $outGoingId){
                 $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$row['message'].'</p>
                                </div>
                             </div>';
             }else{
                 $output .= '<div class="chat incoming">
                                <img src="uploads/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'.$row['message'].'</p>
                                 </div>
                         </div> ';
             }
         }
         echo $output;
     }
  }else{
      header("location:login.php");
  }   
 
?>
