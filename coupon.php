<?php

global $conn;
include_once 'base.php';

function checkUsedCoupon($couponCode): bool
{
    global $conn;
    $sql = "SELECT * FROM coupon WHERE `code` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$couponCode]);

    $coupon = $stmt->fetch();

    if (!$coupon) {
        return false;
    }

    if ($coupon['used']) {
        return false;
    }

    $updateSql = "UPDATE coupon SET used = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->execute([true, $coupon['id']]);
    return true;
}

if (empty($_REQUEST['code'])) {
    die('Please give me a code: like coupon.php?code=1234');
}

$result = checkUsedCoupon($_REQUEST['code'], $conn);

if ($result === true) {
    echo 'true';
    return;
}
echo 'false';