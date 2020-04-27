<?php
    session_start();
    include "../config/conn.php";

    $id_Movingstorage = $_POST['id_Movingstorage'];
    $engine_name = $_POST['engine_name'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $row = $dbconnect->query("INSERT INTO Movingstorage (id_Movingstorage, engine_name,color, price,stock) VALUES ('$id_Movingstorage', '$engine_name', '$color', '$price', '$stock')");

    header("location:../views/admin/Movingstorage.php?page=1A");
?>