<?php
require_once'controllers/MenuController.php';
?>

<link rel="stylesheet" href="css/headerandfooter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
* {
  font-family: "Poppins", sans-serif;

}
h1{
  margin-top: 20px;
  text-align:center;
  font-size:28px;
  font-weight: lighter;
}
.a {
  color: black;
}
.a:hover {
  color: rgba(19, 117, 58, 0.911);
  transition: .3s;
}
.b {
  font-weight: lighter;
  text-align: left;
}

</style>
<?php 
  
  include 'header.php'?>
  <hr>
  <h1>
    News Dashboard
</h1>
<h2 class="b"><a class="a"href="create-menu.php">Create a news post</a></h1>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Text</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
          $m = new MenuController;
          $allMenu = $m->readData();
          foreach($allMenu as $menu):
          ?>
          <tr>
            <td><?php echo $menu['menu_image']?></td>
            <td><?php echo $menu['menu_title']?></td>
            <td><?php echo $menu['menu_body']?></td>
            <td><a class="a" href="edit-menu.php?id=<?php echo $menu['Id'];?>">Edit</a></td>
            <td><a class="a" href="delete-menu.php?id=<?php echo $menu['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <hr>
    <h1>
    Products Dashboard
</h1>
<table class="content-table">
        <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Text</th>
              <th></th>
              <th></th>
            </tr>
        </thead>
        <!-- <tbody>
          <?php
          $m = new MenuController;
          $allMenu = $m->readData();
          foreach($allMenu as $menu):
          ?>
          <tr>
            <td><?php echo $menu['prod_image']?></td>
            <td><?php echo $menu['prod_title']?></td>
            <td><?php echo $menu['prod_body']?></td>
            <td><a class="a" href="edit-news.php?id=<?php echo $menu['Id'];?>">Edit</a></td>
            <td><a class="a" href="delete-news.php?id=<?php echo $menu['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody> -->
    </table>
</div>
