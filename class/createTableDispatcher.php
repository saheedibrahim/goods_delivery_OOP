<?php
include "dbh.contr.php";
class CreateTable extends Dbh{
    public function dispatcherTable(){
        try {
            $sql = "CREATE TABLE dispatcher(
                dispatcher_id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                dispatcher_firstname VARCHAR(30) NOT NULL,
                dispatcher_lastname VARCHAR(30) NOT NULL,
                dispatcher_phone VARCHAR(30) NOT NULL,
                dispatcher_email VARCHAR(30) NOT NULL,            
                dispatcher_pwd VARCHAR(30) NOT NULL,
                role VARCHAR(10)
            )";
            $this->connect()->exec($sql);
            echo "Dispatcher's table created sucessfully";
        } catch (\Throwable $e) {
            echo  "Error: " . $e->getMessage();
        } 
    }
} 

$conn = new CreateTable();
$conn->dispatcherTable();
?>