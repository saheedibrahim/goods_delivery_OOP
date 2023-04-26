<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="error"><?=isset($_GET['error'])? $_GET["error"] : ""; ?></p>
    <form action="./controllers/signupDispatcher.inc.php" name="signup"method="post">
        <input type="text" name="fname" placeholder="Firstname"><br><br>
        <input type="text" name="lname" placeholder="Lastname"><?php echo ""; ?><br><br>
        <input type="text" name="phone" placeholder="Phone number"><?php echo ""; ?><br><br>
        <input type="text" name="email" placeholder="Email"><?php echo ""; ?><br><br>
        <input type="password" name="pwd" placeholder="Password"><?php echo ""; ?><br><br>
        <input type="password" name="pwdConfirm" placeholder="Confirm Password"><?php echo ""; ?><br><br>
        <input type="submit" name="submit" value="Signup">
    </form>
    <p>Already have an account? <a href="loginUser.php">Login</a></p>

<!-- <script>
    function inputCheck(){
        if(document.signup.fname.value.length < 1 || document.signup.lname.value.length < 1 || document.signup.phone.value.length < 1 || document.signup.email.value.length < 1 || document.signup.pwd.value.length < 1){
            document.getElementById("error").innerHTML = "Fill the input";
            return false;
        }
        return true;
    }
</script> -->



    
</body>
</html>