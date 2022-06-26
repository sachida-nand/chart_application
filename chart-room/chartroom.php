<?php 
include 'connection.php';

$roomname = $_GET['roomname'];
$sql = "SELECT * FROM `room` WHERE roomname ='$roomname'";
$result = mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)==0){
        $massege = "Room doesn't Exits";
        echo  '<script>';
        echo  'alert("'.$massege.'");';
        echo  'window.location="http://localhost:90/webdevlopment/chart-room";';
        echo  '</script>';
    }
  }else{
    echo "error Found: ".mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .scrolldiv{
            overflow-y:scroll;
            height:300px;
        }
    </style>
</head>
<body>

    <h2>Chat Messages - <?php echo $roomname ;?></h2>
    <div class="container">
        <div class="scrolldiv">
    </div>
    </div>
    <input type="text" class="form-control" name="userMsg" id="userMsg" placeholder="Type a messege">
    <button class="btn btn-success mt-3 btn-lg px-5" name="submit" id="submit">Send</button>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
       setInterval(runFunction, 1000);

       function runFunction(){
           $.post("htcom.php", {room:'<?php echo $roomname?>'},
             function(data,status){
                document.getElementsByClassName('scrolldiv')[0].innerHTML = data;
             });
       }


            var input = document.getElementById("userMsg");
            input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("submit").click();  
            }
        });


        $("#submit").click(function(){
            let clientmsg = $("#userMsg").val();
        $.post("postmsg.php", {text:clientmsg, room:'<?php echo $roomname;?>', ip:'<?php echo $_SERVER['REMOTE_ADDR'] ;?>'},
        function(data,status){
            document.getElementsByClassName('scrolldiv').innerHTML = data;});
            $("#userMsg").val('');
            return false;
    });

    </script>
</body>

</html>