<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    include "../model/dbh.php";
    include "../model/login.php";
    include "./login.contr.php";
    $loginUser = new LoginContr($email, $pwd);
    $loginUser->loginDispatcher();
   
    header("location: ../view/home.php");
}


?>