<?php
    class SignupContr extends Signup{
        private $fname;
        private $lname;
        private $phone;
        private $email;
        private $pwd;
        private $pwdConfirm;

        public function __construct($fname, $lname, $phone, $email, $pwd, $pwdConfirm){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->phone = $phone;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->pwdConfirm = $pwdConfirm;
        }
        
        public function signupUser(){
            if($this->checkData() == true && $this->checkDataUser() == true){
                $this->setUser($this->fname, $this->lname, $this->phone, $this->email, $this->pwd);
            }
        }

        public function signupDispatcher(){
            if($this->checkData() == true && $this->checkDataDispatcher() == true){
                $this->setDispatcher($this->fname, $this->lname, $this->phone, $this->email, $this->pwd);
            }
        }

        protected function checkData(){
            if($this->emptyInput() == false){
                $error = "fill in the input";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            if($this->checkName() == false){
                $error = "Should contain only alphabet";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            if($this->checkPhone() == false){
                $error = "Should contain only number";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            if($this->checkEmail() == false){
                $error = "Invalid Email";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            if($this->passwordMatch() == false){
                $error = "Password does not match";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            return true;
        }

        private function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function checkDataUser(){
            if($this->userEmailTaken() == false){
                $error = "Email taken";
                header("location: ../signupUser.php?error={$error}");
                exit();
            }
            return true;
        }

        public function checkDataDispatcher(){
            if($this->dispatcherEmailTaken() == false){
                $error = "Dispatcher email taken";
                header("location: ../signupDispatcher.php?error={$error}");
                exit();
            }
            return true;

        }

        private function emptyInput(){
            if(empty($this->fname) || empty($this->lname) || empty($this->phone) || empty($this->email) || empty($this->pwd) || empty($this->pwdConfirm)){
                return false;
            }
            return true;
            }
        
        private function checkName(){
            if(!preg_match("/^['a-zA-Z']*$/", $this->test_input($this->fname) ) || !preg_match("/^['a-zA-Z']*$/", $this->test_input($this->lname))){
                return false;
            }
            return true;
        }

        private function checkPhone(){
            if(!preg_match("/^[0-9]*$/", $this->test_input($this->phone))){
                return false;
            }
            return true;
        }

        private function checkEmail(){
            if(!filter_var( $this->test_input($this->email), FILTER_VALIDATE_EMAIL)){
                return false;
            }
            return true;
        }

        private function passwordMatch(){
            if( $this->test_input($this->pwd) !==  $this->test_input($this->pwdConfirm)){
                return false;
            }
            return true;
        }

        private function userEmailTaken(){
            if(!$this->checkUser($this->test_input($this->email))){
                return false;
            }
            return true;
        }

        private function dispatcherEmailTaken(){
            if(!$this->checkDispatcher($this->test_input($this->email))){
                return false;
            }
            return true;
        }
    }
?>