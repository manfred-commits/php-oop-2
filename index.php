<?php
require_once __DIR__."/classes/Utenti.php";
require_once __DIR__."/classes/Carta.php";
require_once __DIR__."/classes/Prodotti.php";

$firstCard= new Carta("5191 2312 3456 7890","12/21",123);
var_dump($firstCard);

$mrBlueSky= new Utenti("Samuele Madrigali","samuelemadrigali@gmail.com",0,$firstCard);
var_dump($mrBlueSky);
$mrNight=new UtentiPremium("Sam","sam@gmail.com",$firstCard);

$mrNight->setCarta($firstCard);
var_dump($mrNight);

