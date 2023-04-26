<?php
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdConfirm = $_POST["pwdConfirm"];

    include "../class/dbh.contr.php";
    include "../class/signup.php";
    include "./signup-contr.contr.php";
    $user = new SignupContr($fname, $lname, $phone, $email, $pwd, $pwdConfirm);
    $user->signupUser();
    echo"<a href='../includes/loginUser.php'>Login</a>";
}


?>