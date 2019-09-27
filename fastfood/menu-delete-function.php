<?php
require_once('db.php');

$sql = "DELETE FROM tbl_menu WHERE id = ".$_GET['id'];
if($conn->query($sql) === TRUE){
    header('location: menu.php');
} else {
    echo $conn->error;
}