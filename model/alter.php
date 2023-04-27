<?php
include "./dbh.contr.php";
class Alter extends Dbh{
    public function alterTable(){
        $stmt = $this->connect()->prepare("DROP DATABASE goods_delivery_oop");
        if($stmt->execute()){
            echo "Database deleted successfully";
        } else {
            echo "Uable to delete database";
        };
    }
}

$alter = new Alter();
$alter->alterTable();

?>