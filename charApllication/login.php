<?php  include "php/header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>My Persional Chat App</header>
      <div class="error-text">Error massege show</div>
      <form action="#" method="post">
        <div class="input-field input">
          <label for="email">Email Address:</label>
          <input type="text" name="email" id="email" placeholder="Enter your Email">
        </div>

        <div class="input-field input">
          <label for="password">Password:</label>
          <input type="text" name="password" id="password" placeholder="Enter your Password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="input-field button">
          <input type="button" name="submit" class="btn" value="Login for Chat">
        </div>
      </form>
      <p class="already">Not have an Account?<a href="index.php"> Signup Now</a></p>
    </section>
  </div>

  <script src="js/app.js"></script>
  <script src="js/login.js"></script>
</body>
</html>