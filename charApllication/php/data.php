<?php
     while($row = mysqli_fetch_array($sql)){
          $sql2 = "SELECT * FROM messages WHERE (in_coming_id =   {$row['unique_id']} OR out_going_id = {$row['unique_id']}) AND (in_coming_id = {$outGoingId} OR out_going_id = {$outGoingId}) ORDER BY msg_id DESC LIMIT 1";
          $query2 = mysqli_query($con, $sql2);
          $row2 = mysqli_fetch_assoc($query2);
         
          if(mysqli_num_rows($query2) >0){
             $result = $row2['message'];
          }else{
            $result = "No message Available";
          }
      
          (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
      
          ($outGoingId == $row2['out_going_id'] ? $you = "You: " : $you = "" );
          
          ($row['status'] == 'Offline' ? $ofline = "offline" : $ofline = "" );

          $output .= '<a href="chatarea.php?user_id='.$row['unique_id'].'">
                    <div class="contant">
                        <img src="uploads/'. $row['img'].'" alt="">
                        <div class="details">
                            <span>'.$row['fName'] ." " . $row['lName'] .'</span>
                            <p>'.$you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$ofline.'"><i class="fas fa-circle"></i></div>
                </a>';
      }
?>