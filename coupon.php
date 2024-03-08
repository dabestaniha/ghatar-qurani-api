<?php

global $conn;
include_once 'base.php';

function checkUsedCoupon($couponCode, \PDO $conn): bool
{
    $sql = "SELECT * FROM coupon WHERE `code` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$couponCode]);

    $coupon = $stmt->fetch();

    if ($coupon) {

        if (!$coupon['used']) {
            $updateSql = "UPDATE coupon SET used = ? WHERE id = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->execute([true, $coupon['id']]);
            var_dump($updateStmt);
        }
        return true;
    }
    return false;
}