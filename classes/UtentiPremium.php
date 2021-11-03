<?php

class UtentiPremium extends Utenti{
    protected $sconto=20;

    public function __construct($_nome,$_email)
    {   
        $this->nome=$_nome;
        $this->email=$_email;
    }

}