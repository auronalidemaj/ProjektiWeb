<?php
include_once 'new/adminClass.php';
include_once 'new/simpleUserClass.php';
session_start();
?>


<nav>
    <div class="nav">
        <div class="nav1">
            <ul>
                <li><a href="index.php" class="hovernav">home</a></li>
                <li><a href="store.php" class="hovernav">store</a></li>
                <li><a href="about.php" class="hovernav">about</a></li>
                <li><a href="contact.php" class="hovernav">contact</a></li>
                <li><a href="news.php" class="hovernav">news</a></li>
            </ul>
        </div>
        <div class="nav2">
            <ul>
                <li>fit<span>+</span></li>
            </ul>
        </div>
        <div class="nav3">   
            <ul>
            <?php 
                
                if (isset($_SESSION['loggedin'])) { 
                    
                    echo '<li><a href="new/logout.php" class="hovernav">log out</a></li>';
                    
                    if ($_SESSION['role'] == 1) { // If user is an admin, show dashboard button
                      
                        echo '<li><a href="views/menuDashboard.php" class="hovernav">dashboard</a></li>';
                    }
                } else { // If user is not logged in, show login button
          
                   echo ' <li><a href="login.php" class="hovernav">login</a></li>';
                 } ?>
                 </ul>
        </div>
    </div>
</nav>
