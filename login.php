<?php
if(isset($_GET['error'])){
  $error = $_GET['error'];
  echo '<script>alert("'.$error.'")</script>';
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<?php 
include "header.php";  
?>
<hr>
    <body>
      <div class="kufiza">
        <div class="center">
            <h1>Login</h1>
            <form class="login_form" action="new/loginController.php"method="post" name="form" onsubmit="return validated()">
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
              <input type="submit" name="login-btn" value="SIGN IN">
              <div class="signup_link">
                Don't have an account? <a href="signup.php">Sign up!</a>
              </div>
            </form>
          </div>
          </div>
          <br>
          <br>
          <br>
       <?php 
    include "footer.php"; 
    include "new/loginController.php"; 
?>
    <script src="javascript/validation.js"></script>
</body>
</html>
