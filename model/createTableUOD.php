<?php
include "dbh.contr.php";
class CreateUserOrderDispatcher extends Dbh{
    public function relationshipTable(){
        try {
            $sql = "CREATE TABLE relationship (
                relationship_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                users_id INT,
                dispatcher_id INT(6),
                FOREIGN KEY (users_id) REFERENCES users(users_id),
                FOREIGN KEY (dispatcher_id) REFERENCES dispatcher(dispatcher_id)
            )";
            $this->connect()->exec($sql);
            echo "Table order created sucessfully";
        } catch (PDOException $e) {
            echo  "Error: " . $e->getMessage();
        } 
    }
} 

$conn = new CreateTableOrder();
$conn->orderTable();
?>