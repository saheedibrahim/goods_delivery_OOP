<?php
class LoginContr extends Login{
    private $email;
    private $pwd;

    public function __construct($email, $pwd){
        $this->email = $email;
        $this->pwd = $pwd;
    }

    private function login(){
        if($this->emptyInput() == false){
            $error = "fill in the input";
            header("location: ../view/loginUser.php?error={$error}");
            exit();
        }
        return true;
    }

    public function loginUser(){
        if($this->login() == true){
        $this->getUser($this->email, $this->pwd);
        }
    }
  
    public function loginDispatcher(){
        if($this->login() == true){
        $this->getDispatcher($this->email, $this->pwd);
        }
    }

    private function emptyInput(){
        if(empty($this->email) || empty($this->pwd)){
            return false;
        }
        return true;
    }
}
?>