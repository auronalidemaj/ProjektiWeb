<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fit+ - Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php 
  
  include 'header.php';
  include 'Contact2PHP.php'?>

  <hr>
  <div class="form-group">
        <div class="center">
          <br>
            <h1>Contact Form</h1>
            <form class="contact-form" action="Contact2PHP.php" method="post" name="form" onsubmit="return validated()">
              <div class="txt_field">
                <input autocomplete="off" type="text" name="name" placeholder="Name: " id="name" required>
                <span></span>
              </div>
              <div class="txt_field">
                <input autocomplete="off" type="email" name="email" placeholder="Email: " id="email" required>
                <span></span>
              </div>
              <textarea id="subject" name="message" placeholder="Type your message here:" id="message" rows="10" cols="70"></textarea>
              <input type="submit" name="submit-btn" value="SEND">
</div>
</form>
</div>

  <?php 
  
  include 'footer.php'?>
      
   <script src="javascript/contact.js"></script>
</body>
</html>