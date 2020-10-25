<?php
$driver = 'mysql';
$dbHost = 'localhost';
$dbName = 'testpdo';
$dbUsername = 'root';
$dbUserPassword = '';

try {
    $pdo = new PDO("$driver:host=$dbHost;dbname=" . $dbName, $dbUsername, $dbUserPassword);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}