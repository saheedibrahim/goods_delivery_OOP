<?php
include "dbh.contr.php";
class CreateTableOrder extends Dbh{
    public function orderTable(){
        try {
            $sql = "CREATE TABLE orders (
                orders_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                orders_destination VARCHAR(30) NOT NULL,
                orders_LGA VARCHAR(30) NOT NULL,
                orders_address VARCHAR(30) NOT NULL,
                orders_size INT(30) NOT NULL,  
                amount INT(30) NOT NULL,          
                orders_oid VARCHAR(30) NOT NULL,
                carryStatus VARCHAR(10),
                deliveryStatus VARCHAR(10),
                orders_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                users_id INT,
                FOREIGN KEY (users_id) REFERENCES users(users_id)
            )";
            $this->connect()->exec($sql);
            echo "Orders table created sucessfully";
        } catch (PDOException $e) {
            echo  "Error: " . $e->getMessage();
        } 
    }
} 

$conn = new CreateTableOrder();
$conn->orderTable();
?>