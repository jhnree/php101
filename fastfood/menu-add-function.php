<?php
require_once('db.php');

$sql = "INSERT INTO tbl_menu (menu, description, quantity) VALUES 
('".$_POST['menu']."','".$_POST['description']."','".$_POST['quantity']."')";
// var_dump($_POST);
if($conn->query($sql) === TRUE){
    header('location: menu.php');
} else {
    echo $conn->error;
}