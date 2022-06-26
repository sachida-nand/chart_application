<?php  include "php/header.php"; ?>
<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location:login.php");
    }
?>

<body>
    <div class="wrapper">
        <section class="chart-area">
            <header>

            <?php
                include "php/connection.php";

                if(!isset($_GET['user_id'])){
                    header("location:users.php");
                }else{
                    $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                    $sql = mysqli_query($con,"SELECT * FROM users WHERE unique_id = '{$user_id}'");

                    if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_array($sql);
                   }else{
                        header("location:users.php");
                   }
                  
                }

                
            ?>           
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="uploads/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fName'] ." " . $row['lName']; ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chart-box">
                 
              <!-- all data coming form database  -->
            </div>
      <form action="#" class="typing-area" autocomplete="off">
          <input type="text" name="out_going_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
          <input type="text" name="in_coming_id" value="<?php echo $user_id; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here...">
          <button><i class="fab fa-telegram-plane"></i></button>
      </form>

        </section>
    </div>

    <script src="js/chart.js"></script>
</body>
</html>