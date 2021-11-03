<?php

class Prodotti{
    protected $nome;
    protected $prezzo;
    
    public function __construct($_nome,$_prezzo)
    {
        $this->nome=$_nome;
        $this->email=$_prezzo;
    }
}