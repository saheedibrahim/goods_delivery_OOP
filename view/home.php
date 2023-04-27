<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>You are welcome</h3>
    <p>Email: <?php echo $_SESSION['user_email'] ?></p>
    <p>Firstname: <?php echo $_SESSION['user_fname'] ?></p>
    <p>Lastname: <?php echo $_SESSION['user_lname'] ?></p>
    <p>Phone number: <?php echo $_SESSION['user_phone'] ?></p>
    <p>User ID: <?php echo $_SESSION['user_id'] ?></p>
    <p><a href="./logoutUser.php">Logout</a></p>
    <p><a href="./signupOrder.php">Order</a></p>
</body>
</html>