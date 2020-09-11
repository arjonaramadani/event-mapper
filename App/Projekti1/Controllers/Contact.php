<?php
    include(dirname(__FILE__)."\Connection.php");

    if (isset($_POST)) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $query = "INSERT INTO contacts (name, email, message) 
        VALUES('$name', '$email', '$message')";
        
        mysqli_query($conn, $query);

        include('../success.php');
    }
?>