<?php
require_once './controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])) {
    $menu->update($_POST, $menuId);
}

?>
<link rel="stylesheet" href="css/headerandfooter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<?php 
  
  include 'header.php'?>

<hr>
<form method="POST" class="editM">
    Image:
    <input type="file" class="inputF" name="image" value="<?php echo $currenMenu['menu_image'];?>">
    <br>
    Title:
    <input type="text" class="inputT" name="title" maxlength="50" value="<?php echo $currenMenu['menu_title'];?>">
    <br>
    Body:
    <textarea name="body" cols="30" rows="10" class="inputta" maxlength="150" value="<?php echo $currenMenu['menu_body'];?>"></textarea>
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