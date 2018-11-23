<?php
    $servername = "localhost";
    $database = "homebeer";
    $username = "root";
    $password = "4m4r3l0";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
