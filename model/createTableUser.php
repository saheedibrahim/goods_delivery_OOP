<?php
include "dbh.contr.php";
class CreateTableUser extends Dbh{
    public function userTable(){
        try {
            $sql = "CREATE TABLE users(
                users_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                users_firstname VARCHAR(30) NOT NULL,
                users_lastname VARCHAR(30) NOT NULL,
                users_phone VARCHAR(30) NOT NULL,
                users_email VARCHAR(30) NOT NULL,            
                users_pwd VARCHAR(30) NOT NULL,
                role VARCHAR(10)
            )";
            $this->connect()->exec($sql);
            echo "Users table created successfully";
        } catch (\Throwable $e) {
            echo  "Error: " . $e->getMessage();
        } 
    }
} 

$conn = new CreateTableUser();
$conn->userTable();
?>