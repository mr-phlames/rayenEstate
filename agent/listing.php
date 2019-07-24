<button onclick="back()">Back</button>
<br>
<br>
<?php 
    require "php/connection.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM listings WHERE id = '$id'";
    $listing = mysqli_query($connection, $query);
    $listing = mysqli_fetch_assoc($listing);

    echo '<center>'.$listing['name'].'</center>';
    echo '<center>'.$listing['description'].'</center>';
    echo '<center>GH¢ '.$listing['price'].'</center>';
    echo '<center>For '.$listing['sell_status'].'</center>';
    echo '<center>'.$listing['bedrooms'].' bedrooms</center>';
    echo '<center>'.$listing['bathrooms'].' bathrooms</center>';
?>
<script>
    function back() {
        return window.history.back();
    }
</script>

