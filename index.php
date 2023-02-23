<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fit+ - SignUp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php 
  
  include 'header.php';
  include 'subscribe.php'?>

<div class="fotojaa">
        <img src="img/main1.jpg" alt="" id="mainF">
        <div class="textimg">Come join us at our gym,<br> or buy from our online store.<br><button href="store.html"><a class="bbb" href="store.html">Go to Store</a></button></div>
    </div>

    <div class="trupi">
        <div class="fit1">
        <img src="" alt="" id="slider">
    </div>
        <div class="fit">
            <h1>Come join us at our gym, or buy from our online store.</h1>
            <p>At FitPLUS, the online fitness store, you will find hundreds of models of fitness products such as exercise bikes, treadmills, gym machines, weight machines at the best price. Discover the fitness equipment you need according to the discipline you practice such as aerobics, cross-training, fitness classes and outdoor training. Whether you start doing fitness or just starting to get in shape, it is very important to choose comfortable and appropriate clothing for the discipline you are doing, doing Pilates is not the same as Spinning or Zumba. With our best price guarantee, you can select your gym clothing and fitness accessories from different brands.</p>
            <button><span>Get fit</span></button>
        </div>
      </div>
      <hr>
      <h1 class="testimonals">Products to checkout</h1>
      <div class="showitems">
        <div class="item1">
            <img src="img/item1.jpg" alt="">
            <p>Shop with us for the best gain. <br><a href="">Store ></a></p>
        </div>
        <div class="item2">
            <img src="img/item3.jpg" alt="">
            <p>Healthiest products out there. <br><a href="">Store ></a></p>
        </div>
        <div class="item3">
            <img src="img/item2.webp" alt="">
            <p>Gain muscle with our protein. <br><a href="">Store ></a></p>
        </div>
      </div>
      <hr>
      <br>
      <h1 class="testimonals">Testimonals</h1>
      <div class="easy">
        <div class="easy1">
        <img src="img/person_1.jpg" alt="">
        <h2>Anne Smith</h2>
        <h3>Client</h3>
        <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta enim fugit animi."</p>
    </div>
    <div class="easy2">
        <img src="img/person_2.jpg" alt="">
        <h2>Jay Johnson</h2>
        <h3>Client</h3>
        <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta enim fugit animi."</p>
    </div>
    </div>
    <hr>
    <div class="subscribe">
    <div class="subscribe-box">
        <h1>Subscribe to our newsletter</h1>
        <span>Get notified whenever we update our online store</span>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="email" name="email" placeholder="Email Address" required>
          <button type="submit" name="submit-btn">Subscribe</button>
        </form>
</div>
    </div>

    <?php 
  
    include 'footer.php'?>

    <script src="javascript/script.js"></script>
</body>
</html>