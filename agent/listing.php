<?php 
    require "php/connection.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM listings WHERE id = '$id'";
    $listing = mysqli_query($connection, $query);
    $listing = mysqli_fetch_assoc($listing);

    echo $listing['name'];
?>

