<?php  include "php/header.php"; ?>
<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location:login.php");
    }
?>


<body>
    <div class="wrapper">
        <section class="users">
            <header>

             <?php
                include "php/connection.php";
                $sql = mysqli_query($con,"SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");

                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_array($sql);
                }
            ?>
                <div class="contant">
                    <img src="uploads/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fName'] ." " . $row['lName']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to star chat</span>
                <input type="text" name="" id="" placeholder="Enter a name to search">
                <button><i class="fas fa-search"></i> </button>
            </div>
            <div class="users-list">
                <!-- data coming from database php/users.php -->
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>
</html>