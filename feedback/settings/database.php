<?php
    // Define DB Settings.
    define('DB_HOST', 'localhost');
    define('DB_USER', 'steve');
    define('DB_PASS', 'beetroot');
    define('DB_NAME', 'feedback-db');
    // Create DB Connection Variable.
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check the DB Connection was Successful.
    if($connection->connect_error) {
        die('Bro, the connection failed ' . $connection->connect_error);
    }
?>