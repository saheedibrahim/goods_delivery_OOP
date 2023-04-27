<?php
class Dbh{
    function connect(){
        try {
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "goods_delivery_oop";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;   
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>