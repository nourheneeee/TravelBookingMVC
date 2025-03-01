<?php
class TravelOffer {
    private $id;
    private $title;
    private $destination;
    private $departure_date;
    private $return_date;
    private $price;
    private $availability;
    private $category;

    public function __construct($id, $title, $destination, $departure_date, $return_date, $price, $availability, $category) {
        $this->id = $id;
        $this->title = $title;
        $this->destination = $destination;
        $this->departure_date = $departure_date;
        $this->return_date = $return_date;
        $this->price = $price;
        $this->availability = $availability;
        $this->category = $category;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getDepartureDate() {
        return $this->departure_date;
    }

    public function getReturnDate() {
        return $this->return_date;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getCategory() {
        return $this->category;
    }

    // Show the travel offer
    public function show() {
        echo "<table border='1' style='width:100%; text-align:left;'>";
        echo "<tr>
                <th>Title</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Category</th>
              </tr>";
        echo "<tr>
                <td>{$this->title}</td>
                <td>{$this->destination}</td>
                <td>{$this->departure_date}</td>
                <td>{$this->return_date}</td>
                <td>{$this->price} €</td>
                <td>" . ($this->availability ? 'Yes' : 'No') . "</td>
                <td>{$this->category}</td>
              </tr>";
        echo "</table>";
    }
}
?>
