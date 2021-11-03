<?php

class Shop{
    protected $nome;
    protected $proprietario;
    protected $indirizzo;

    public function __construct($_nome,$_proprietario,$_indirizzo)
    {
        $this->nome=$_nome;
        $this->proprietario=$_proprietario;
        $this->indirizzo=$_indirizzo;
    }



}