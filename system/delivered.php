<?php 
session_start();
include "../config/conn.php";

$delivered_id_order = $_GET['id'];

$delivered = $dbconnect->query("UPDATE order_data SET payment_status='Delivered' WHERE id_order='$delivered_id_order'");

header("location:../views/customer/my-order.php");
