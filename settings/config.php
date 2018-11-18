<?php
    $servername = "sql312.epizy.com";
    $database = "epiz_22972120_homebeer";
    $username = "epiz_22972120";
    $password = "homebeer";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>