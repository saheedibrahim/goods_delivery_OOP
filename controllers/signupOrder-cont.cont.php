<?php
class OrderContr extends Signup{
    private $destination;
    private $LGA;
    private $address;
    private $size;

    public function __construct($destination, $LGA, $address, $size){
        $this->destination = $destination;
        $this->LGA = $LGA;
        $this->address = $address;
        $this->size = $size;
    }

    public function signupOrder(){
        session_start();
        if($this->emptyInput() == false){
            echo "All fields are required";
            exit();
        }
        if($this->size() == false){
            echo "Only numbrs are allowed";
            exit();
        }
        $amount = $this->amount($this->size);
        $checkOrder = $this->checkOrder();
        $this->setOrder()->execute(array($this->destination, $this->LGA, $this->address, $this->size, $amount, $checkOrder, 'false', 'false', $_SESSION['user_id']));
    }
    
    public function amount($size){
        if($this->destination == "Lagos"){
            $price = (int)$size * 1000;
        } else {
            $price = (int)$size * 1000 + 5000;
        }
        return $price;
    }

    private function size(){
        if(!preg_match('/^[0-9]*$/', $this->size)){
            return false;
        }
        return true;
    }

    private function emptyInput(){
        if(empty($this->destination) || empty($this->LGA) || empty($this->address) || empty($this->size)){
            return false;
        }
        return true;
    }
}


?>