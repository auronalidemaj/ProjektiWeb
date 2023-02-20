<?php
require_once '../MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])) {
    $menu->update($_POST, $menuId);
}

?>
<link rel="stylesheet" href="../css/headerandfooter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                <li><a href="menuDashboard.php" class="hovernav">dashboard</a></li>
                <li><a href="../login.php" class="hovernav">login</a></li>
            </ul>
        </div>
    </div>
</nav>

<hr>
<form method="POST" class="editM">
    Image:
    <input type="file" class="inputF" name="image" value="<?php echo $currenMenu['menu_image'];?>">
    <br>
    Title:
    <input type="text" class="inputT" name="title" maxlength="50" value="<?php echo $currenMenu['menu_title'];?>">
    <br>
    Body:
    <input type="text" class="inputta" name="body" maxlength="150" value="<?php echo $currenMenu['menu_body'];?>">
    <br>
    <input type="submit" class="but" name="submit" value="Update">
</form>

 
<style>
    .editM {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
}
*{
  font-family: sans-serif; 
}
.inputF {
    text-align: center;
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
}

.inputT {
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
}

.inputta {
    min-width: 300px;
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid gray;
  width: 100%;
  max-width: 300px;
  min-height: 50px;
  max-height: 300px;
}

.but {
  margin: 10px 0;
  padding: 5px;
  border-radius: 5px;
  border: none;
  background-color: rgba(19, 117, 58, 0.911);
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.but:hover {
  color: black;
}

</style>