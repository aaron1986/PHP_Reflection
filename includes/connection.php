<?php

try {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=$servername; dbname=newsletter_db", $username, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "error!: " . $e -> getMessage();
}

try {
    $servername_contact = "localhost";
    $username_contact = "root";
    $password_contact = "";

    $connection_contact = new PDO("mysql:host=$servername_contact; dbname=netmatters_contact_db", $username_contact, $password_contact);
    $connection_contact -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "error!: " . $e -> getMessage();
}