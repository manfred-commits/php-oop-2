<?php

class UtentiPremium extends Utenti{
    protected $sconto=20;

    public function __construct($_nome,$_email,$_carta)
    {   
        parent::__construct($_nome,$_email,$_carta);
    }
    public function setSconto($_sconto)
    {
        $this->sconto=$_sconto;
    }
    public function getSconto()
    {
        return $this->sconto;
    }
    


}