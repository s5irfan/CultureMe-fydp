<?php
    $servername = "us-cdbr-iron-east-04.cleardb.net";
    $database = "heroku_affe0ae15e94776";
    $username = "b2b3a699fe1834";
    $password = "42de193a";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    ?>

