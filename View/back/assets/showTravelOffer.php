<?php

require 'C:/xampp/htdocs/TravelBookingMVC/Model/TravelOffer.php';


$offre1 = new TravelOffer(
    1,
    'Discover Madrid',
    'Madrid, Spain',
    '2024-10-15',
    '2024-10-22',
    1200.00,
    true,
    'Cultural'
);


echo '<pre>';
var_dump($offre1);
echo '</pre>';
echo '<br><hr><br>';

$offre1->show();
?>
