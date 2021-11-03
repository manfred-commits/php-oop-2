<?php
require_once __DIR__."/UtentiPremium.php";

class Utenti{

    protected $nome;
    protected $email;
    protected $sconto;
    protected $carta;

    public function __construct($_nome,$_email,$_sconto,$_carta=null)
    {
        $this->nome=$_nome;
        $this->email=$_email;
        $this->sconto=$_sconto;
        $this->carta=$_carta;
    }
    public function setNome($_nome)
    {
        $this->nome=$_nome;
    }
    public function setEmail($_email)
    {
        $this->email=$_email;
    }
    public function setCarta($_carta)
    {
        $this->carta[]=$_carta;
    }
    public function setSconto($_sconto)
    {
        $this->sconto=$_sconto;
    }



    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCarta()
    {
        return $this->carta;
    }
    public function getSconto()
    {
        return $this->sconto;
    }

}