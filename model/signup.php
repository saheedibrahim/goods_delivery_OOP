<?php
class Signup extends Dbh{
    protected function setUser($fname, $lname, $phone, $email, $pwd){       
        $stmt = $this->connect()->prepare("INSERT INTO users(users_firstname, users_lastname, users_phone, users_email, users_pwd, role) VALUES(?, ?, ?, ?, ?, ?)");
        // $password = md5($pwd);
        if($stmt->execute(array($fname, $lname, $phone, $email, $pwd, 'user'))){
            echo "User created  successfully";
        } else {
            $stmt = null;
            $error = "Error occur during the process";
            header("Location: ../signupUser.php?error={$error}");
        };
    }
    
    protected function checkUser($email){
        $stmt = $this->connect()->prepare("SELECT users_email FROM users WHERE users_email=?");
        if(!$stmt->execute([$email])){
            $stmt = null;
            $error = "Email already taken";
            header("Location: ../signupUser.php?error={$error}");
        };
        if($stmt->rowCount() > 0){
            return false;        
        }
        return true;
    }

    protected function setDispatcher($fname, $lname, $phone, $email, $pwd){       
        $stmt = $this->connect()->prepare("INSERT INTO dispatcher(dispatcher_firstname, dispatcher_lastname, dispatcher_phone, dispatcher_email, dispatcher_pwd, role) VALUES(?, ?, ?, ?, ?, ?)");
        $password = md5($pwd);
        if($stmt->execute(array($fname, $lname, $phone, $email, $password, 'dispatcher'))){
            echo "User created  successfully";
        } else {
            $stmt = null;
            $error = "Error occur during the process";
            header("Location: ../signupUser.php?error={$error}");
        };
    }
    
    protected function checkDispatcher($email){
        $stmt = $this->connect()->prepare("SELECT dispatcher_email FROM dispatcher WHERE dispatcher_email=?");
        if(!$stmt->execute([$email])){
            $stmt = null;
            $error = "Email already taken";
            header("Location: ../signupDispatcher.php?error={$error}");
        };
        if($stmt->rowCount() > 0){
            return false;        
        }
        return true;
    }
    
    public function setOrder(){
        $stmt = $this->connect()->prepare("INSERT INTO orders(orders_destination, orders_LGA, orders_address, orders_size, amount, orders_oid, carryStatus, deliveryStatus, users_id) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt;
        // if(!$stmt->execute(array($destination, $LGA, $address, $size, $amount, $this->checkOrder(), $carryStatus, $deliveryStatus))){
        //     $stmt = null;
        //     $error = "Error occur during the process";
        //     header("Location: ../signupUser.php?error={$error}");
        // };
    }

    public function checkOrder(){
        $goodsID = rand(900000, 999999);
        $stmt = $this->connect()->prepare("SELECT orders_oid FROM orders WHERE orders_oid=?");
        $stmt->execute([$goodsID]);
        if($stmt->rowCount() > 0){
            $goodsID = rand(900000, 999999);
        }
        return $goodsID;
    }

    

    // public function setUser($fname, $lname, $phone, $email, $pwd){
    //     $password = md5($pwd);
    //     $this->register()->execute(array($fname, $lname, $phone, $email, $password, 'user'));
    //     echo "User created  successfully";
    // }

    // protected function setDispatcher($fname, $lname, $phone, $email, $pwd){
    //     $password = md5($pwd);
    //     $this->register()->execute(array($fname, $lname, $phone, $email, $password, 'dispatcher'));
    //     echo "User created  successfully";
    // }
    // protected function register($fname, $lname, $phone, $email, $pwd){       
    //     $stmt = $this->connect()->prepare("INSERT INTO user(users_firstname, users_lastname, users_phone, users_email, Passwd, role) VALUES(?, ?, ?, ?, ?, ?)");
    //     $password = md5($pwd);
    //     if($stmt->execute(array($fname, $lname, $phone, $email, $password, 'user'))){
    //         echo "User created  successfully";
    //     } else {
    //         $stmt = null;
    //         $error = "Error occur during the process";
    //         header("Location: ../signupUser.php?error={$error}");
    //     };
    // }


}
?>