<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <p class="error"><?=isset($_GET['error'])? $_GET["error"] : ""; ?></p>
    <form action="../controller/loginDispatcher.inc.php" name="signup"method="post">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="./signupDispatcher.php">Signup</a></p>

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