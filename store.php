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
  
  include 'header.php';
require_once 'storeController.php';
?>
<hr>

<div class="all">
    <?php
    $products = new StoreController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo '<div class="prod">
        <div class="item protein">
            <img src="' .$all[$i]['i_image'] .'">
        </div>
        <div class="info">
            <h2>' .$all[$i]['i_title'] .'</h2>
            <p>' .$all[$i]['i_body'] .'</p>
        </div>
        </div>';
    } 
    ?>
</div>
<?php 
  
  include 'footer.php'?>

    <script src="javascript/filtering.js"></script>
</body>
</html>