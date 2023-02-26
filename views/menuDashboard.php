<?php
require_once'../MenuController.php';
require_once'../StoreController.php';
require_once'../contactController.php';
require_once'../subscribeController.php';
include_once '../new/userMapper.php';
include_once '../new/adminClass.php';
include_once '../new/simpleUserClass.php';
session_start();
?>
<link rel="stylesheet" href="../css/headerandfooter.css">
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
  background-color: rgba(19, 117, 58, 0.911);
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
<nav>
    <div class="nav">
        <div class="nav1">
            <ul>
                <li><a href="../index.php" class="hovernav">home</a></li>
                <li><a href="../store.php" class="hovernav">store</a></li>
                <li><a href="../about.php" class="hovernav">about</a></li>
                <li><a href="../contact.php" class="hovernav">contact</a></li>
                <li><a href="../news.php" class="hovernav">news</a></li>
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
                    
                    echo '<li><a href="../new/logout.php" class="hovernav">log out</a></li>';
                    
                    if ($_SESSION['role'] == 1) { // If user is an admin, show dashboard button
                      
                        echo '<li><a href="menuDashboard.php" class="hovernav">dashboard</a></li>';
                    }
                } else { // If user is not logged in, show login button
          
                   echo ' <li><a href="../login.php" class="hovernav">login</a></li>';
                 } ?>
                 </ul>
        </div>
    </div>
</nav>
  <hr>
  <h1>
    News Dashboard
</h1>
<h2 class="b"><a class="a"href="create-menu.php">Create a news post</a></h1>
<div>
  <table class="content-table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Text</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $m = new MenuController;
      $allMenu = $m->readData();
      foreach($allMenu as $menu):
      ?>
      <tr>
      <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $menu['menu_title']?></td>
        <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $menu['menu_body']?></td>
        <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $menu['menu_image']?></td>
        <td><a class="a" href="edit-menu.php?id=<?php echo $menu['Id'];?>">Edit</a></td>
        <td><a class="a" href="delete-menu.php?id=<?php echo $menu['Id'];?>">Delete</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

    <h1>
    Store Dashboard
</h1>
<h2 class="b"><a class="a"href="create-store.php">Create a store post</a></h1>
<table class="content-table">
        <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Image</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $s = new StoreController;
          $allStore = $s->readData();
          foreach($allStore as $store):
          ?>
          <tr>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $store['i_title']?></td>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $store['i_body']?></td>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $store['i_image']?></td>
            <td><a class="a" href="edit-store.php?id=<?php echo $store['Id'];?>">Edit</a></td>
            <td><a class="a" href="delete-store.php?id=<?php echo $store['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody> 
    </table>
<h1>Contact Dashboard</h1>
    <table class="content-table">
        <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $c = new contactController;
          $allContacts = $c->getAllContacts();
          foreach($allContacts as $contact):
          ?>
          <tr>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $contact['name']?></td>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $contact['email']?></td>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $contact['message']?></td>
            <td><a class="a" href="delete-contact.php?id=<?php echo $contact['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody> 
    </table>
    <h1>Subscriber Dashboard</h1>
    <table class="content-table">
        <thead>
            <tr>
              <th>Email</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $ss = new subController;
          $allSubs = $ss->getAllSubscribers();
          foreach($allSubs as $subs):
          ?>
          <tr>
          <td style="max-width: 50ch; word-wrap: break-word;"><?php echo $subs['email']?></td>
            <td><a class="a" href="delete-subscriber.php?id=<?php echo $subs['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody> 
    </table>
    <h1>Admin Dashboard</h1>
    <h2 class="b"><a class="a"href="create-admin.php">Create a admin</a></h1>
    <table class="content-table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mapper = new userMapper();
                $adminList = $mapper->getAllAdmins();

                foreach ($adminList as $mapper) {
                ?>
                    <tr>
                        <td><?php echo $mapper['email']; ?></td>
                        <td><?php echo $mapper['username']; ?></td>
                        <td><?php echo $mapper['userpassword']; ?></td>
                        <td><a class="a" href="set-user.php?id=<?php echo $mapper['userID'];?>">Set as User</td>
                        <td><a class="a" href="delete-admin.php?id=<?php echo $mapper['userID'];?>">Delete</td>
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <h1>User Dashboard</h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mapper = new userMapper();
                $simpleList = $mapper->getAllSimpleUsers();

                foreach ($simpleList as $mapper) {
                ?>
                    <tr>
                        <td><?php echo $mapper['email']; ?></td>
                        <td><?php echo $mapper['username']; ?></td>
                        <td><?php echo $mapper['userpassword']; ?></td>
                        <td><a class="a" href="set-admin.php?id=<?php echo $mapper['userID'];?>">Set as Admin</td>
                        <td><a class="a" href="delete-user.php?id=<?php echo $mapper['userID'];?>">Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

</div>
