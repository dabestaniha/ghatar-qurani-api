<?php
global $conn;
include_once 'base.php';

// Decode the JSON data into a PHP associative array
$data = json_decode($_REQUEST['player'], true);

// اطلاعات فرستاده شده از یونیتی با استفاده از POST
$player_name = $data['player_name'];
$phone_number = $data['phone_number'];


try {
    // تنظیم خصوصیات PDO برای نمایش خطاها
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // استفاده از prepared statement برای جلوگیری از حملات SQL injection
    $stmt = $conn->prepare("INSERT INTO user_data (phone_number, player_name) VALUES (:phone_number, :player_name)");

    // تنظیم مقادیر پارامترها
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':player_name', $player_name);


    // اجرای کوئری
    $stmt->execute();

    $response = array("success" => true, "message" => "Data saved successfully.");
} catch (PDOException $e) {
    $response = array("success" => false, "message" => "Error: " . $e->getMessage());
}

// بستن اتصال به دیتابیس
$conn = null;

// ارسال پاسخ به یونیتی
header('Content-Type: application/json');
echo json_encode($response);
json_decode(file_get_contents('php://input'), true)
?>
