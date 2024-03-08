<?php

include_once "base.php";
include ('coupon.php');


$result = checkUsedCoupon('123123', $conn);

var_dump($result);
