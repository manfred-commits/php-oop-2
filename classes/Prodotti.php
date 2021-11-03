<?php

class Prodotti{
    protected $nome;
    protected $prezzo;
    
    public function __construct($_nome,$_prezzo)
    {
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
    }

    public function setNome($_nome)
    {
        $this->nome=$_nome;
    }
    public function setPrezzo($_prezzo)
    {
        $this->prezzo=$_prezzo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getPrezzo()
    {
        return $this->prezzo;
    }
}