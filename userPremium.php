<?php 
class User extends UserPremium{
    protected $scontoR = 20;
}
 function __construct($_nome,$_cognome,$_email,$scontoR){
        parent::__construct($_nome,$_cognome,$email);
        $this->scontoR = $scontoR;
        

    }

    public function setSconto($_sconto){
        $this->sconto = $this->eta > 50 ? $_sconto : $this->sconto;
    }
    public function getSconto(){
        return $this->sconto;

    }
?>