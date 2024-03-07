<?php
// اطلاعات دیتابیس
$dbHost = 'localhost';
$dbName = 'webnab_Ghatar_Qurani';
$dbUsername = 'webnab_ghatar_qurani';
$dbPassword = 'Vj@179314';
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}