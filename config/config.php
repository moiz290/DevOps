<?php
    $servername = "sql113.epizy.com";
    $username = "epiz_30686719";
    $password = "2aAehRPc77r21E";
    $database = "epiz_30686719_devops";
    $port = 3306;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
