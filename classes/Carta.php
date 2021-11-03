<?php

class Carta{

    protected $codice;
    protected $scadenza;
    protected $cvc;


    public function __construct($_codice,$_scadenza,$_cvc)
    {
        $this->codice=$_codice;
        $this->scadenza=$_scadenza;
        $this->cvc=$_cvc;
    }
}