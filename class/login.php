<?php
class Login extends Dbh{
    public function getUser($email, $pwd){       
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_email=? AND users_pwd=?");
        // $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $checkpwd = password_verify($pwd, $pwdhashed[0]["Passwd"]);
        // echo "password is: ".$pwdhashed[0]["Passwd"];
        // if($checkpwd == false){
        //     echo 'Password does not match';
        //     exit();
        // } else {
            $stmt->execute(array($email, $pwd));
            if($stmt->rowCount() > 0){
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $_SESSION['user_id'] = $row[0]['users_id'];
                $_SESSION['user_fname'] = $row[0]['users_firstname'];
                $_SESSION['user_lname'] = $row[0]['users_lastname'];
                $_SESSION['user_phone'] = $row[0]['users_phone'];
                $_SESSION['user_email'] = $row[0]['users_email'];
            } else {
                $error = "Invalid username or password";
                header("location: ../includes/loginUser.php?error={$error}");
                exit();
            }
        }
   
    protected function getDispatcher($email, $pwd){       
        $stmt = $this->connect()->prepare("SELECT * FROM dispatcher WHERE dispatcher_email=? AND dispatcher_pwd=?");
        $stmt->execute(array($email, $pwd));
        if($stmt->rowCount() > 0){
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['user_id'] = $row[0]['dispatcher_id'];
            $_SESSION['user_fname'] = $row[0]['dispatcher_firstname'];
            $_SESSION['user_lname'] = $row[0]['dispatcher_lastname'];
            $_SESSION['user_phone'] = $row[0]['dispatcher_phone'];
            $_SESSION['user_email'] = $row[0]['dispatcher_email'];
        } else {
            $error = "Invalid username or password";
            header("location: ../loginDispatcher.php?error={$error}");
            exit();
        }
    }
}
?>