<?php
if(isset($_POST['order'])){
    $destination = $_POST['destination'];
    $LGA = $_POST['LGA'];
    $address = $_POST['address'];
    $size = $_POST['size'];

    include '../model/dbh.php';
    include '../model/signup.php';
    include './signupOrder.contr.php';
    
    $order = new OrderContr($destination, $LGA, $address, $size);
    $order->signupOrder();
    
    echo "Order created successsfully\n";
    echo "<a href='../view/home.php'>Home</a>";
}


?>