<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fit+ - SignUp</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php 
  
  include 'header.php'?>
      <div class="center">
        <h1>Login</h1>
        <form class="login_form" action="./login.php" method="post" name="form" onsubmit="return validated()">
          <div class="txt_field">
            <input autocomplete="off" type="text" name="username" id="user" required>
            <span></span>
            <label for="username">Username</label>
          </div>
          <div id="name1_error">Fill out your username correctly</div>
          <div class="txt_field">
            <input type="password" name="password" id="pass" required>
            <span></span>
            <label for="password" >Password</label>
          </div>
          <div id="password_error">Fill out your password correctly</div>
          <div class="btnbtnbtn">
          <input type="submit" name="login-btn" value="Login">
        </div>
          <div class="signup_link">
            Don't have an account? <a href="signup.php">Signup</a>
          </div>
        </form>
      </div>
      <?php 
  
  include 'footer.php'?>
   <script src="javascript/validation.js"></script>
</body>
</html>