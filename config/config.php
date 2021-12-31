<?php
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "bcc77e1841a73a";
    $password = "dd32e024";
    $database = "heroku_7fce67cb249adf3";
    $port = 3306;

    /*
     * fetch CONFIG VAR VALUES from heroku server and get the config values
     * url obtained is:
     * mysql://bcc77e1841a73a:dd32e024@us-cdbr-east-05.cleardb.net/heroku_7fce67cb249adf3?reconnect=true
     * Everything:
     * * after the @ symbol until the / is the DB_HOST, us-cdbr-east-05.cleardb.net 
     * * Everything after / until ? is DB_DATABASE, heroku_7fce67cb249adf3
     * * The string after the // until : is the DB_USERNAME, bcc77e1841a73a
     * * The string between : and @ is the DB_PASSWORD, dd32e024
     */

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
