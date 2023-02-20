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
  <hr>
      <div class="center">
        <h1>Signup</h1>
        <form class="login_form" action="./signup.php" method="post" name="form" onsubmit="return validated()">
            <div class="txt_field">
                <input autocomplete="off" type="email" name="emailaddress" id="email" required>
                <span></span>
                <label for="emailaddress">Email</label>
              </div>
              <div id="email_error">Fill out your email correctly</div>
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
          <input type="submit" name="login-btn" value="Signup">
          <div class="signup_link">
            Already have an account?<a href="login.php">Login</a>
          </div>
        </form>
      </div>
      <?php 
  
  include 'footer.php'?>
   <script src="javascript/signup.js"></script>
</body>
</html>