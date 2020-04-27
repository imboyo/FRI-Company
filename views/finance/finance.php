<?php  


include "../../config/conn.php";


// Query Untuk Semua
   // Query Sum Harga Semua
   $query1 = "SELECT SUM(price)  as sum FROM `order_data`";

   $query1_result = mysqli_query($conn, $query1);

   while($row = mysqli_fetch_assoc($query1_result)) {
      $output = $row['sum'];
   }

   // Query Total Bahan Pembelian
   $query_amount = "SELECT SUM(amount) as sum FROM `order_data`";

   $query_amount_result = mysqli_query($conn, $query_amount);

   while($row = mysqli_fetch_assoc($query_amount_result)) {
      $output_amount = $row['sum'];
   }



// Query untuk ms_01-----------------------------
   // Query Amount
      $query_ms01_amount = "SELECT id_Movingstorage, SUM(amount) as sum
      FROM order_data WHERE id_Movingstorage = 'ms_01' ";

      $query_ms01_amount_result = mysqli_query($conn, $query_ms01_amount);

      while($row = mysqli_fetch_assoc($query_ms01_amount_result)) {
         $output_ms01_amount = $row['sum'];
      }


   // Query Price
      $query_ms01_price = "SELECT id_Movingstorage, SUM(price) as sum
      FROM order_data WHERE id_Movingstorage = 'ms_01' ";

      $query_ms01_price_result = mysqli_query($conn, $query_ms01_price);

      while($row = mysqli_fetch_assoc($query_ms01_price_result)) {
         $output_ms01_price = $row['sum'];
      }


//Query ms_02
   // Query Amount
      $query_ms02_amount = "SELECT id_Movingstorage, SUM(amount) as sum
      FROM order_data WHERE id_Movingstorage = 'ms_02' ";

      $query_ms02_amount_result = mysqli_query($conn, $query_ms02_amount);

      while($row = mysqli_fetch_assoc($query_ms02_amount_result)) {
         $output_ms02_amount = $row['sum'];
      }

   // Query Price
      $query_ms02_price = "SELECT id_Movingstorage, SUM(price) as sum
            FROM order_data WHERE id_Movingstorage = 'ms_02' ";

      $query_ms02_price_result = mysqli_query($conn, $query_ms02_price);

      while ($row = mysqli_fetch_assoc($query_ms02_price_result)) {
         $output_ms02_price = $row['sum'];
      }

// Query Tanggal Bulan
      











$sql1 = "SELECT * FROM `order_data`";

$result = mysqli_query($conn, $sql1);


?>