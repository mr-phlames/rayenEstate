<?php 

    require "connection.php";

    $id = $_GET['id'];
    $email = $_SESSION['email'];

    //  delete listing
    $query = "DELETE FROM `listings` WHERE `id` = '$id'";
    $listings = mysqli_query($connection, $query);

    header('location:  ../my_listings.php');

?>