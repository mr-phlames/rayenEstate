<?php 
    require "connection.php";

    $query = "SELECT * FROM listings WHERE email='$email'";
    $listing = mysqli_query($connection, $query);
    $listing = mysqli_fetch_assoc($listing);

    if (!is_array($listing)) {
        echo '
            <h3>You have no listings.....add a listing to view it here.</h3>
        ';
    } else {
        for($i == 0; $i < count($listing); $i++) {
            // echo '
                #place listing here
            // ';
        }
    }
?>