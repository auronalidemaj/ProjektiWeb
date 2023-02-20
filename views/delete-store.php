<?php
    require_once '../StoreController.php';
    if(isset($_GET['id'])){
        $storeId = $_GET['id'];
    }
    $store = new StoreController;
    $store->delete($storeId);
?>