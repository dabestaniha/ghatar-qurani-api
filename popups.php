<?php
global $conn;
include_once 'base.php';
// دریافت اطلاعات از دیتابیس (فرض شده است که جدول popup_data وجود دارد)
$sql = "SELECT * FROM popup_data";
$result = $conn->query($sql);

// بررسی نتیجه
if ($result->num_rows > 0) {
    // دریافت ردیف اطلاعات
    $row = $result->fetch_assoc();

    // ایجاد یک آرایه اطلاعات
    $popupData = array(
        'message' => $row['messagePopup'],
        'image' => $row['imagePopup'],
        'buttonText' => $row['button_text'],
        'buttonImage' => $row['button_image']
    );

    // تبدیل آرایه به JSON و چاپ
    echo json_encode($popupData);
} else {
    // در صورتی که اطلاعاتی یافت نشود
    echo "No data found";
}

// بستن اتصال به دیتابیس
$conn->close();
?>
