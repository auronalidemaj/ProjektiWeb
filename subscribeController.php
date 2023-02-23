<?php
require_once "config/database.php";
class subController 
{
    public $db;
    private $query;

    public function __construct()
    {
        $this->db=new Database;
    }

   public function insertSubscriber($subscriber)
   {
    $query =$this->db->pdo->prepare("INSERT into subscribe (email) values (:email)");
       $email = $subscriber->getEmail();
       $query->bindParam(":email", $email);
       $query->execute();
   }

   public function getAllSubscribers()
   {
    $query =$this->db->pdo->query("SELECT * from subscribe");

    return $query->fetchAll();
   }

   public function deleteSubscriber($subsid)
   {
    $query =$this->db->pdo->prepare("DELETE from subscribe where Id=:id");
    $query->bindParam(":id", $subsid);
    $query->execute();
        return header('Location: menuDashboard.php');
   }
}
?>