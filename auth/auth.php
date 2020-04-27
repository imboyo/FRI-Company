<?php 
	include '../config/conn.php';
	session_start();
	//Check login status
	if (isset($_SESSION['status'])) {
		header("location: http://localhost/FRICOMPANY/views/".$_SESSION['role']."/home.php");
	}
?>