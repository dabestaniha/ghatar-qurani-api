<?php
global $conn;
include_once 'base.php';

// دریافت اطلاعات از دیتابیس (فرض شده است که جدول popup_data وجود دارد)
$sql = "SELECT * FROM shop_data";
$result = $conn->query($sql);

// بررسی نتیجه
if ($result->num_rows > 0) {
    // دریافت ردیف اطلاعات
    $row = $result->fetch_assoc();

    // ایجاد یک آرایه اطلاعات
    $ShopData = array(
        'Price2500' => $row['Price2500'],
        'PriceCrossedOut2500' => $row['PriceCrossedOut2500'],
        'Ribbon2500' => $row['Ribbon2500'],
        'Price5000' => $row['Price5000'],
        'PriceCrossedOut5000' => $row['PriceCrossedOut5000'],
        'Ribbon5000' => $row['Ribbon5000'],
        'Price10000' => $row['Price10000'],
        'PriceCrossedOut10000' => $row['PriceCrossedOut10000'],
        'Ribbon10000' => $row['Ribbon10000'],
        'Price20000' => $row['Price20000'],
        'PriceCrossedOut20000' => $row['PriceCrossedOut20000'],
        'Ribbon20000' => $row['Ribbon20000'],
        'Price40000' => $row['Price40000'],
        'PriceCrossedOut40000' => $row['PriceCrossedOut40000'],
        'Ribbon40000' => $row['Ribbon40000'],
        'Price100000' => $row['Price100000'],
        'PriceCrossedOut100000' => $row['PriceCrossedOut100000'],
        'Ribbon100000' => $row['Ribbon100000'],
        'eghtesadi' => $row['eghtesadi'],
        'vizhe' => $row['vizhe']
    );

    // تبدیل آرایه به JSON و چاپ
    echo json_encode($ShopData);
} else {
    // در صورتی که اطلاعاتی یافت نشود
    echo "No data found";
}

// بستن اتصال به دیتابیس
$conn->close();
?>
