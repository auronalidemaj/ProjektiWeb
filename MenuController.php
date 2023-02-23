<?php
require_once 'config/Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from news');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] = './img/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO news (menu_image, menu_title, menu_body)
        VALUES (:menu_image, :menu_title, :menu_body)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from news WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $request['image'] = './img/' .$request['image'];
        $query = $this->db->pdo->prepare('UPDATE news SET menu_image = :menu_image,
        menu_title = :menu_title, menu_body = :menu_body WHERE id = :id');
        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from news WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>