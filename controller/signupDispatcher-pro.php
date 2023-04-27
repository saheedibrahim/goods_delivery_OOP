<?php
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdConfirm = $_POST["pwdConfirm"];
   
    include "../model/dbh.php";
    include "../model/signup.php";
    include "./signup.contr.php";
    $dispatcher = new SignupContr($fname, $lname, $phone, $email, $pwd, $pwdConfirm);
    $dispatcher->signupDispatcher();
    echo"<a href='../view/loginUser.php'>Login</a>";

}


?>