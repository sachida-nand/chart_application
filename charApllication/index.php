<?php 
   session_start(); 
  if(isset($_SESSION['unique_id'])){
        header("location:users.php");
    }
include "php/header.php"; ?>

<body>
  <div class="wrapper">
    <section class="signup form">
      <header>My Persional Chat App</header>
      <div class="error-text"></div>
      <form action="#" method="post" class="form" enctype="multipart/form-data">
        <div class="name-details">

          <div class="input-field input">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" placeholder="First Name">
          </div>

          <div class="input-field input">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" placeholder="Last Name">
          </div>
        </div>

        <div class="input-field input">
          <label for="email">Email Address:</label>
          <input type="text" name="email" id="email" placeholder="Enter Any valid Email">
        </div>

        <div class="input-field input">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="Enter new Password" autocomplete="off">
          <i class="fas fa-eye toggle" id="toggle"></i>
        </div>

        <div class="input-field input">
          <label for="cpassword">Confirm Password:</label>
          <input type="password" name="cpassword" id="cpassword" placeholder="Enter Password Again" autocomplete="off">
        </div>

        <div class="input-field imgage">
          <label>Select Image:</label>
          <input type="file" name="image">
        </div>

        <div class="input-field button">
          <input type="submit" name="submit" class="btn" value="Submit">
        </div>
      </form>
      <p class="already">Already have Account?<a href="login.php"> Login Now</a></p>
    </section>
  </div>

  <script src="js/app.js"></script>
  <script src="js/signup.js"></script>
</body>
</html>