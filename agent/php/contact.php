<?php
    require_once("connection.php");

    $errors = ["name" => "", "email" => "", "title" => "", "body" => ""];

    $name = $email = $title = $body = "";

    if(isset($_POST['contact_btn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $body = $_POST['body'];

        $name = mysqli_real_escape_string($connection, $name);
        $email = mysqli_real_escape_string($connection, $email);
        $title = mysqli_real_escape_string($connection, $title);
        $body = mysqli_real_escape_string($connection, $body);

        # validation
        if (empty($name)) {
            $errors['name'] = "Name is required";
            return;
        }
        if (empty($email)) {
            $errors['email'] = "Email is required";
            return;
        }
        if (empty($title)) {
            $errors['title'] = "Subject is required";
            return;
        }
        if (empty($body)) {
            $errors['body'] = "Please type your message";
            return;
        }

        $query = "INSERT INTO messages(name, email, title, body) VALUES('$name', '$email', '$title', '$body')";
        mysqli_query($connection, $query);
    }