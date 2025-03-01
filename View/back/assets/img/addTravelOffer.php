<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Travel Offer</title>
    <link rel="stylesheet" href="styl.css">
    <script src="addOffer.js"></script>
</head>
<body>
    <h1>Add a Travel Offer</h1>
    <form id="addTravelOfferForm" method="POST" onsubmit="return validateForm()">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
        <span id="titleError" class="error"></span><br>

        <label for="destination">Destination:</label><br>
        <input type="text" id="destination" name="destination" required><br>
        <span id="destinationError" class="error"></span><br>

        <label for="departure_date">Departure Date:</label><br>
        <input type="date" id="departure_date" name="departure_date" required><br>
        <span id="departureDateError" class="error"></span><br>

        <label for="return_date">Return Date:</label><br>
        <input type="date" id="return_date" name="return_date" required><br>
        <span id="returnDateError" class="error"></span><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" min="0" required><br>
        <span id="priceError" class="error"></span><br>

        <label for="availability">Availability:</label><br>
        <input type="checkbox" id="availability" name="availability"><br>

        <label for="category">Category:</label><br>
        <select id="category" name="category" required>
            <option value="adventure">Adventure</option>
            <option value="relaxation">Relaxation</option>
            <option value="culture">Culture</option>
        </select><br>
        <span id="categoryError" class="error"></span><br>

        <button type="submit">Add Offer</button>
    </form>
</body>
</html>
