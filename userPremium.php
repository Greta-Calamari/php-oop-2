<?php 
require_once __DIR__.'/User.php';
class User extends UserPremium{
    protected $scontoR = 20;
}
 function __construct($_nome,$_cognome,$_email,$_carta,$scontoR){
        parent::__construct($_nome,$_cognome,$email,$_carta);
        $this->scontoR = $scontoR;
        

    }

    public function setSconto($_sconto){
        $this->sconto = $this->UserPremium ? $_sconto : $this->sconto;
        
    }
    public function getSconto(){
        return $this->sconto;

    }
?>