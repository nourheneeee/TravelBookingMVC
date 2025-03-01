<?php
require_once __DIR__ . '/../../Model/TravelOffer.php';
 /*question 2
    $offre1=new TravelOffer();
var_dump($offre1->titre='Discover Paris');
var_dump($offre1->destination='ParisFrance');
var_dump($offre1->date_depart='2024-10-15');
var_dump($offre1->date_retour='2024-01-22');
var_dump($offre1->prix='1200');
var_dump($offre1->disponible='1');
var_dump($offre1->categorie='Cultural');
$offre1->show();
*/
//question4
$offre1=new TravelOffer("Discover Paris",
    "ParisFrance",   
    "2024-10-15",      
    "2024-11-22",     
    1200.0,          
    true,       
    "Cultural"  );

$offre1->show();
 

?>