<?php
require_once('db.php');

$sql = "UPDATE tbl_menu SET 
                menu = '".$_POST['menu']."', 
                description = '".$_POST['description']."', 
                quantity = '".$_POST['quantity']."' 
        WHERE id = ".$_POST['id'];
if($conn->query($sql) === TRUE){
    header('location: menu.php');
} else {
    echo $conn->error;
}