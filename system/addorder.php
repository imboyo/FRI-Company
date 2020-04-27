<?php 
	session_start();
	include "../config/conn.php";

$id_user = $_SESSION['id_user'];
$id_Movingstorage = $_POST['id_Movingstorage'];
$amount = $_POST['amount'];

$row = $dbconnect->query("SELECT price FROM movingstorage WHERE id_Movingstorage = '$id_Movingstorage'");
$data = $row->fetch();
$price = $amount * $data['price'];


$order_date = date('Y-m-d');

// Update Data
	$stock_query = $dbconnect->query("SELECT stock FROM movingstorage WHERE id_Movingstorage = '$id_Movingstorage'");
	$data_1 = $stock_query->fetch();
	$stock = $data_1['stock'];

	$result_stock = $stock - $amount;

	if($amount > 0) {
		$dbconnect->query("UPDATE movingstorage SET stock = $result_stock WHERE id_Movingstorage = '$id_Movingstorage'");

		$dbconnect->query("INSERT INTO `fri006`.`order_data` (`id_user`, `id_Movingstorage`, `amount`, `price`, `order_date`, `payment_status`) VALUES ('$id_user', '$id_Movingstorage', '$amount', '$price', '$order_date', 'Waiting for payment')");
	}


	header("location:../views/customer/my-order.php?page=1A");
?>