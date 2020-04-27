<?php 
	session_start();
	include "../config/conn.php";

	$id_Movingstorage = $_POST['id_Movingstorage'];
	$engine_name = $_POST['engine_name'];
	$color = $_POST['color'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];

	$row = $dbconnect->query("UPDATE Movingstorage SET engine_name='$engine_name',color='$color', price='$price', stock='$stock' WHERE id_Movingstorage='$id_Movingstorage'");
	
	header("location:../views/admin/Movingstorage.php?page=1A");
?>