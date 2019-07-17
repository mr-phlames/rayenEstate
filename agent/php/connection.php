<?php   
    try {
        $connection = mysqli_connect("localhost", "root", "", "rayen");
    } catch (\Throwable $err) {
        throw $err;
    }
?>