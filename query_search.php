<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Task2.php';
if (isset($_POST['coupon'])) {
    $coupon = $_POST['coupon'];
    $db1 = new Database();
    $db1->connect();
    //$db1->select();
    $db1->search($coupon);
}
?>
