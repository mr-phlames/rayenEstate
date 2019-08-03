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

        $image_name = $_FILES["property_image"]["name"].session_id();
        $image = $_FILES["property_image"]["tmp_name"];
        $folder="uploads/";
        if(move_uploaded_file($image, "./uploads/".basename($image_name))) {
            echo '<div style="width: 100%; height: 300px !important;">alert("Image uploaded");</div>';
        } else {
            echo '<div style="width: 100%; height: 300px !important;">alert("Image upload failed");</div>';
        }

        $query = "INSERT INTO listings(price, name, email, display_email, telephone, location, bedrooms, bathrooms, land_dimensions, property_dimensions, sell_status, description, img_name) VALUES('$price', '$name', '$email', '$display_email', '$telephone', '$location', '$bedrooms', '$bathrooms', '$land_dimensions', '$property_dimensions', '$sell_status', '$description', '$image_name')";
        mysqli_query($connection, $query);

        header('location: my_listings.php');
    }
?>