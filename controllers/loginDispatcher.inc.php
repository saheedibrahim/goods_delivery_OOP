<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    include "../class/dbh.contr.php";
    include "../class/login.php";
    include "./login-contr.contr.php";
    $loginUser = new LoginContr($email, $pwd);
    $loginUser->loginDispatcher();
   
    header("location: ../home.php");
}


?>