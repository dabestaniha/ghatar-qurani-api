<?php
// اطلاعات دیتابیس
$dbHost = 'localhost';
$dbName = 'webnab_ghatar_qurani';
$dbUsername = 'webnab_ghatar_qurani';
$dbPassword = 'Vj@179314';
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

// بررسی اتصال
try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}