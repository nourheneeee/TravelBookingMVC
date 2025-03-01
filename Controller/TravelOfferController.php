<?php
require_once 'C:/xampp/htdocs/TravelBookingMVC/Model/TravelOffer.php';  
class TravelOfferController {
    public function showTravelOffer($offer) {
        if ($offer instanceof TravelOffer) {
            $offer->show();
        } else {
            echo "Error";
        }
    }
}
?>
