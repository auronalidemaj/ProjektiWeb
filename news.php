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
require_once 'MenuController.php';
?>

<style>
.all {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
    height: 100%;
}
    h3 {
        text-align:center;
    }
    img {
        height: 100%;
        width: 100%;
    }
.prod {
  width: 25%;

  box-sizing: border-box;
  padding: 10px;
  border-bottom: 1px solid gray;
  border-right: 1px solid gray;
  border-left: 1px solid gray;
}
.info {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 10px;
    text-align: justify;
    word-wrap: break-word;
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
