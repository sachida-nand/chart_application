<?php 
   
   $room = $_POST['room'];

   if(strlen($room)>20 || strlen($room)<2){
        $massege = "Room name can't be less then 2 character or more then 15 character";
        echo  '<script>';
        echo  'alert("'.$massege.'");';
        echo  'window.location="http://localhost:90/webdevlopment/chart-room";';
        echo  '</script>';
   }else if(!ctype_alnum($room) || is_numeric($room)){
        $massege = "Room name Only start with character";
        echo  '<script>';
        echo  'alert("'.$massege.'");';
        echo  'window.location="http://localhost:90/webdevlopment/chart-room";';
        echo  '</script>';
   }else{
        include 'connection.php';
   }

   $sql = "SELECT * FROM `room` WHERE roomname ='$room'";
   $result = mysqli_query($conn,$sql);
   if($result){
       if(mysqli_num_rows($result)>0){
            $massege = "Room is already created Select Other one";
            echo  '<script>';
            echo  'alert("'.$massege.'");';
            echo  'window.location="http://localhost:90/webdevlopment/chart-room";';
            echo  '</script>';
       }else{
           $create = "INSERT INTO `room` (`roomname`, `stime`) VALUES ('$room', current_timestamp());
           ";
        //    $insert = mysqli_query($conn,$create);
           if(mysqli_query($conn,$create)){
            $massege = "Your Room is Ready Now You can start chart";
            echo  '<script>';
            echo  'alert("'.$massege.'");';
            echo  'window.location="http://localhost:90/webdevlopment/chart-room/chartroom.php?roomname='.$room.'";';
            echo  '</script>';
           }
       }
   }else{
       echo "error found";
   }

?>