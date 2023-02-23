<?php 
    require_once '../contactController.php';

    if(isset($_GET['id'])){
        $contactid = $_GET['id'];

    $contact = new contactController();
    $contact->deleteContact($contactid);
    }
?>