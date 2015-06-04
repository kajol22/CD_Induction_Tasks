<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Database_Task3.php';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $db1 = new Database();
    $db1->connect();
    $db1->clean_String($username);  // For Task 3
    $db1->select($username);
}
?>
