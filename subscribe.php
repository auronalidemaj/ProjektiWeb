<?php
require_once 'subscribeController.php';

if (isset($_POST['submit-btn'])) {
    $subscribe = new Subscriber($_POST);
    $subscribe->insertSubscriber();
    return header("Location:index.php");
}

class Subscriber
{
    private $email = "";

    public function __construct($formData)
    {
        $this->email = $formData['email'];
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function insertSubscriber()
    {
        $subs = new Subscriber([
            'email' => $this->email,
        ]);
        
        $controller = new subController();
        $controller->insertSubscriber($subs);
        header("Location:index.php");
    }
}
    ?>