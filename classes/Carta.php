<?php

class Carta{

    protected $codice;
    protected $scadenza;
    protected $cvc;


    public function __construct($_codice,$_scadenza,$_cvc)
    {
        $this->codice=$_codice;
        $this->scadenza=strtotime($_scadenza);

        $newFormat=date('m-Y',$this->scadenza);

        if($newFormat<date('m-Y')){
            throw new Exception('Carta scaduta');
        }
        $this->scadenza=$_scadenza;
        $this->cvc=$_cvc;
    }
    public function setScadenza($_scadenza){
        $_scadenza=strtotime($_scadenza);

        $stringToDate=date('m-Y',$_scadenza);
        if($stringToDate<date('m-Y')){
            throw new Exception('Carta scaduta');
        }
        $this->scadenza=$stringToDate;

    }
}