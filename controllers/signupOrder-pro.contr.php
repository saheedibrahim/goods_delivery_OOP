<?php
if(isset($_POST['order'])){
    $destination = $_POST['destination'];
    $LGA = $_POST['LGA'];
    $address = $_POST['address'];
    $size = $_POST['size'];

    include '../class/dbh.contr.php';
    include '../class/signup.php';
    include './signupOrder-cont.cont.php';

    // $amount = new OrderContr($destination, $LGA, $address, $size, $amount, $checkOrder, 'false', 'false');
    // $amount->amount($size);
    
    $order = new OrderContr($destination, $LGA, $address, $size);
    $order->signupOrder();

    
    echo "Order created successsfully\n";
    echo "<a href='../home.php'>Home</a>";
}


?>