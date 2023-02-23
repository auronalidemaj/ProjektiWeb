<?php 
    require_once '../subscribeController.php';

    if(isset($_GET['id'])){
        $subscribeid = $_GET['id'];

    $subscribe = new subController();
    $subscribe->deleteSubscriber($subscribeid);
    }
?>