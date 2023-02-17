<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit+ Home</title>
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php 
  
  include 'header.php'?>
<div class="shop">
    <div class="dropdown">
        <button class="dropbtn">Filter products ⮟</button>
        <div class="dropdown-content">
          <button class="btn active" onclick="filterSelection('all')">All items</button>
          <button class="btn" onclick="filterSelection('protein')">Protein</button>
          <button class="btn" onclick="filterSelection('clothing')">Clothing</button>
          <button class="btn" onclick="filterSelection('accessories')">Accesories</button>
          <button class="btn" onclick="filterSelection('weights')">Weights</button>
          <button class="btn" onclick="filterSelection('other')">Other</button>
        </div>
      </div>
    <div class="produktet">
    <div class="rreshti protein">
        <div class="item protein" ><img src="img/store/item4.jpeg" alt="">
            <h2>Protein Isolate</h2>
            <p>$49.99</p>
            <button>Buy</button>
        </div>
        <div class="item protein"><img src="img/item1.jpg" alt="">
            <h2>Plant Protein</h2>
            <p>$89.99</p>
            <button>Buy</button>
        </div>
        <div class="item protein"><img src="img/item2.webp" alt="">
            <h2>Protein Powder</h2>
            <p>$79.99</p>
            <button>Buy</button>
        </div>
        <div class="item protein"><img src="img/item3.jpg" alt="">
            <h2>Cyclone Strength</h2>
            <p>$99.99</p>
            <button>Buy</button>
        </div>
    </div>
    <div class="rreshti clothing">
        <div class="item clothing"><img src="img/store/clothing1.webp" alt="">
            <h2>Clothing 1</h2>
            <p>$9.99</p>
            <button>Buy</button>
        </div>
        <div class="item clothing"><img src="img/store/clothing2.jpg" alt="">
            <h2>Clothing 2</h2>
            <p>$19.99</p>
            <button>Buy</button>
        </div>
        <div class="item clothing"><img src="img/store/clothing3.webp" alt="">
            <h2>Clothing 3</h2>
            <p>$29.99</p>
            <button>Buy</button>
        </div>
        <div class="item clothing"><img src="img/store/clothing4.jpg.crdownload" alt="">
            <h2>Clothing 4</h2>
            <p>$39.99</p>
            <button>Buy</button>
        </div>
    </div>
    <div class="rreshti">
        <div class="item accessories"><img src="img/store/ac1.jpg" alt="">
            <h2>Accessory 1</h2>
            <p>$9.99</p>
            <button>Buy</button>
        </div>
        <div class="item accessories"><img src="img/store/ac2.webp" alt="">
            <h2>Accessory 2</h2>
            <p>$19.99</p>
            <button>Buy</button>
        </div>
        <div class="item accessories"><img src="img/store/ac3.webp" alt="">
            <h2>Accessory 3</h2>
            <p>$29.99</p>
            <button>Buy</button>
        </div>
        <div class="item accessories"><img src="img/store/ac4.jpeg" alt="">
            <h2>Accessory 4</h2>
            <p>$39.99</p>
            <button>Buy</button>
        </div>
    </div>
    <div class="rreshti">
        <div class="item weights"><img src="img/store/weight1.jpg" alt="">
            <h2>Weights 1</h2>
            <p>$19.99</p>
            <button>Buy</button>
        </div>
        <div class="item weights"><img src="img/store/weight2.jpg" alt="">
            <h2>Weights 2</h2>
            <p>$29.99</p>
            <button>Buy</button>
        </div>
        <div class="item weights"><img src="img/store/weight3.jpg" alt="">
            <h2>Weights 3</h2>
            <p>$39.99</p>
            <button>Buy</button>
        </div>
        <div class="item weights"><img src="img/store/weight4.jpg" alt="">
            <h2>Weights 4</h2>
            <p>$9.99</p>
            <button>Buy</button>
        </div>
    </div>
    <div class="rreshti">
        <div class="item other"><img src="img/store/other1.webp" alt="">
            <h2>Exercise Tool 1</h2>
            <p>$999.99</p>
            <button>Buy</button>
        </div>
        <div class="item other"><img src="img/store/other2.jpg" alt="">
            <h2>Exercise Tool 2</h2>
            <p>$899.99</p>
            <button>Buy</button>
        </div>
        <div class="item other"><img src="img/store/other3.jpg.crdownload" alt="">
            <h2>Exercise Tool 3</h2>
            <p>$799.99</p>
            <button>Buy</button>
        </div>
        <div class="item other"><img src="img/store/other4.jpg" alt="">
            <h2>Exercise Tool 4</h2>
            <p>$699.99</p>
            <button>Buy</button>
        </div>
    </div>
</div>
</div>
<?php 
  
  include 'footer.php'?>

    <script src="javascript/filtering.js"></script>
</body>
</html>