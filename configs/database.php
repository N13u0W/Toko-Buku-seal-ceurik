<?php

$host ="localhost";
$dname = "mylibrary";
$username = "root" ;
$password = ";";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException) {
    die("Connection fail: " . $e->getMessage());
}

