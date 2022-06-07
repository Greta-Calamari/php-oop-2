<?php
class User{
    protected $nome;
    protected $cognome;
    protected $email;
    
    
    function __construct($_nome,$_cognome,$_email){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

    public function setNome($_nome){
       $this->nome = $_nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCognome($_cognome){
        $this->cognome = $_cognome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function setEmail($_email){
        if((strpos($_email,'@') !== false) && (strpos ($_email, ".") !==false)){{
            throw new Exception('Email non valida');

        }
        $this->email = $_email;

        }
    }
    public function getEmail(){
        return $this->email;
    }
    

    
}

?>