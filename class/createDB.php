<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE goods_delivery_oop";
    $conn->exec($sql);
    echo "Database created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>