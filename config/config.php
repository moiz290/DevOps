<?php
    $servername = "db4free.net";
    $username = "devops_4108845";
    $password = "hello12eF";
    $database = "devops_4108845";
    $port = 3306;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
