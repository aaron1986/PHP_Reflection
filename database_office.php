<?php
try {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection_office = new PDO("mysql:host=$servername; dbname=office_netmatters", $username, $password);
    $connection_office -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "error!: " . $e -> getMessage();
    die();
}


