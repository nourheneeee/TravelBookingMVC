<?php

require_once 'C:/xampp/htdocs/TravelBookingMVC/Model/TravelOffer.php';
require_once 'C:/xampp/htdocs/TravelBookingMVC/Controller/TravelOfferController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $destination = isset($_POST['destination']) ? trim($_POST['destination']) : null;
    $departure_date = isset($_POST['departure_date']) ? trim($_POST['departure_date']) : null;
    $return_date = isset($_POST['return_date']) ? trim($_POST['return_date']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $availability = isset($_POST['availability']) ? 1 : 0;
    $category = isset($_POST['category']) ? trim($_POST['category']) : null;

    if (!$title || !$destination || !$departure_date || !$return_date || !$price || !$category) {
        echo "Error ";
    } elseif (!is_numeric($price) || $price <= 0) {
        echo "Error, positive number please.";
    } else {
        $offre1 = new TravelOffer(null, $title, $destination, $departure_date, $return_date, $price, $availability, $category);

        echo "<h3>Show with var_dump()</h3>";
        echo "<pre>";
        var_dump($offre1);
        echo "</pre>";

        $offerC = new TravelOfferController();
        echo "<h3>Show with showTravelOffer()</h3>";
        $offerC->showTravelOffer($offre1);
    }
}
?>

