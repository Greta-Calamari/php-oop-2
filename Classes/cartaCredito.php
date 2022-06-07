<?php 
require_once __DIR__.'/User.php';
class CartaCredito extends User{
    protected $number;
    protected $name;
    protected $surname;
    protected $dateScad;


    public function setNumber($_sconto){
        $this->number = $number;
    }
    public function getNumber(){
        return $this->number;
    }
    public function setName($_name){
        $this->number = $number;
    }
    public function getName(){
        return $this->number;
    }
    public function setSurname($_surname){
        $this->number = $number;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setDate($_dateScad){
        $this->number = $number;
    }
    public function getDate(){
        return $this->dateScad;
    }


    
}
?>