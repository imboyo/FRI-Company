<?php 
	session_start();
	include "../config/conn.php";

	$id_Movingstorage = $_GET['id'];

	$row =$dbconnect->query("DELETE FROM Movingstorage WHERE id_Movingstorage='$id_Movingstorage'");
	
	header("location:../views/admin/Movingstorage.php?page=1A");
?>
