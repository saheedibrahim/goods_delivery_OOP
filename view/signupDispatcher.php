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
    <form action="../controller/signupDispatcher.inc.php" name="signup"method="post">
        <input type="text" name="fname" placeholder="Firstname"><br><br>
        <input type="text" name="lname" placeholder="Lastname"><br><br>
        <input type="text" name="phone" placeholder="Phone number"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <input type="password" name="pwdConfirm" placeholder="Confirm Password"><br><br>
        <input type="submit" name="submit" value="Signup">
    </form>
    <p>Already have an account? <a href="./loginUser.php">Login</a></p>
    
</body>
</html>