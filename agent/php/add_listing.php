<?php 
    require "connection.php";

    if (isset($_POST['add_listings_button'])) {
        $price = mysqli_real_escape_string($connection, $_POST['price']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_SESSION['email']);
        $display_email = mysqli_real_escape_string($connection, $_POST['display_email']);
        $telephone = mysqli_real_escape_string($connection, $_POST['telephone']);
        $location = mysqli_real_escape_string($connection, $_POST['location']);
        $bedrooms = mysqli_real_escape_string($connection, $_POST['bedrooms']);
        $bathrooms = mysqli_real_escape_string($connection, $_POST['bathrooms']);
        $land_dimensions = mysqli_real_escape_string($connection, $_POST['land_dimensions']);
        $property_dimensions = mysqli_real_escape_string($connection, $_POST['property_dimensions']);
        $sell_status = mysqli_real_escape_string($connection, $_POST['sell_status']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $image = mysqli_real_escape_string($connection, $_POST['image']);

        $query = "INSERT INTO listings(price, name, email, display_email, telephone, location, bedrooms, bathrooms, land_dimensions, property_dimensions, sell_status, description) VALUES('$price', '$name', '$email', '$display_email', '$telephone', '$location', '$bedrooms', '$bathrooms', '$land_dimensions', '$property_dimensions', '$sell_status', '$description')";
        mysqli_query($connection, $query);

        header('location: my_listings.php');
    }
?>