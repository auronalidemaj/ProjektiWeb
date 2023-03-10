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
    <title>SignUp</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<?php 
include "header.php"; 

?>
<hr>
    <body>

          <div class="center">
            <h1>Create Account</h1>
            <form class="login_form" action="new/registerController.php" method="post" name="form" onsubmit="return validated()">
                <div class="txt_field">
                    <input autocomplete="off" type="text" name="register-emailaddress" id="email" required>
                    <span></span>
                    <label for="emailaddress">Email</label>
                </div>
                <div id="email_error">Fill out your email correctly</div>
              <div class="txt_field">
                <input autocomplete="off" type="text" name="register-username" id="user" required>
                <span></span>
                <label for="username">Username</label>
              </div>
              <div id="name1_error">Fill out your username correctly</div>
              <div class="txt_field">
                <input type="password" name="register-password" id="pass" required>
                <span></span>
                <label for="password" >Password</label>
              </div>
              <div id="password_error">Fill out your password correctly</div>
              <input type="submit" name="register-btn" value="REGISTER">
              <div class="signup_link">
                Already have an account?<a href="login.php">Sign in!</a>
              </div>
            </form>
          </div>
          
          </div>
          <br>
          <br>
          <br>
          
       <?php 
    include "footer.php";  
    include_once 'new/registerController.php';
?>
    <script src="javascript/signup.js"></script>
</body>
</html>
