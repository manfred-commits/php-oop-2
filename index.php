<?php
require_once __DIR__."/classes/Shop.php";
require_once __DIR__."/classes/Utenti.php";
require_once __DIR__."/classes/Prodotti.php";

$rinascente= new Shop("Rinascente","Ferdinando Bocconi","Via Roma, 289, 90133 Palermo PA, Italia");
var_dump($rinascente);
$mrBlueSky= new Utenti("Samuele Madrigali","samuelemadrigali@gmail.com",0);
var_dump($mrBlueSky);
