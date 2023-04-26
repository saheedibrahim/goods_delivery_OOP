<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{color: #ff0000;}
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['user_id']))
    { ?>
    <p>You are welcome <?php echo $_SESSION["user_fname"] ." ".$_SESSION['user_lname']; ?></p>
    <p>UserID <?php echo $_SESSION["user_id"]; ?></p>
    <p><a href="./logoutUser.php">Logout</a></p>
    <p><a href="../home.php">Home</a></p>

   <form action="../controllers/signupOrder-pro.contr.php" method="post">
     <select name="destination" id="" required>
            <option value="select destination">select destination</option>
            <option value="Lagos">Lagos</option>
            <option value="Oyo">Oyo</option>
            <option value="Ogun">Ogun</option>
            <option value="Kwara">Kwara</option>
            <option value="Ondo">Ondo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Kogi">Kogi</option>
            <option value="Kano">Kano</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Abuja">Abuja</option>
            <option value="Katsina">Katsina</option>
        </select><span class="error">*</span><br><br>
        LGA: <input type="text" name="LGA" required><span class="error">*</span><br><br>
        Address: <input type="text" name="address" required><span class="error">*</span><br><br>
        Weight(kg): <input type="text" name="size" required><span class="error">*</span><br><br>
        <input type="submit" name="order" value="Order">
    </form>
    <?php } else { ?>
        <h2>Please login to be able to order</h2>
        <p><a href="./loginUser.php">Login</a></p>
    <?php } ?>
</body>
</html>