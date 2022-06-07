<?php 
class User extends UserPremium{
    protected $scontoR = 20;
}
 function __construct($_nome,$_cognome,$_email,$scontoR){
        parent::__construct($_nome,$_cognome,$email);
        $this->scontoR = $scontoR;
        

    }

    public function setSconto($_sconto){
        // qui metto lo sconto
    }
    public function getSconto(){
        return $this->sconto;

    }
?>