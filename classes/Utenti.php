<?php
require_once __DIR__."/UtentiPremium.php";

class Utenti{

    protected $nome;
    protected $email;
    protected $sconto=0;

    public function __construct($_nome,$_email,$_sconto)
    {
        $this->nome=$_nome;
        $this->email=$_email;
        $this->sconto=$_sconto;
    }

}