<?php
$host = "dt-0000023";
$username = "root";
$password = "123456";
$db = "fastfood";

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}