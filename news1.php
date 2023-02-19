<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/headerandfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php 
  
  include 'header.php'?>
<hr>
<?php
require_once 'controllers/MenuController.php';
?>
<style>
    .prod {
        width:25%;
        height: 600px;
        border: 1px solid black;
    }
    img {
        height: 400px;
        width: 400px;
    }
    h3 {
        text-align:center;
    }
    .all {
        display:Flex;
        max-width: 1600px;
    }
    </style>
<div class="all">
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo '<div class="prod">
        <div class="img">
            <img src="' .$all[$i]['menu_image'] .'">
        </div>
        <div class="info">
            <h3>' .$all[$i]['menu_title'] .'</h3>
            <p>' .$all[$i]['menu_body'] .'</p>
        </div>
        </div>';
    } 
    ?>
</div>

<?php 
  
  include 'footer.php'?>
</body>
</html>
