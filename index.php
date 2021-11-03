<?php
require_once __DIR__."/classes/Utenti.php";
require_once __DIR__."/classes/Prodotti.php";

$mrBlueSky= new Utenti("Samuele Madrigali","samuelemadrigali@gmail.com",0);
var_dump($mrBlueSky);
$mrNight=new UtentiPremium("Sam","sam@gmail.com");
var_dump($mrNight);

