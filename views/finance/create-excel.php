<?php
session_start();
include '../../config/page.php';
include 'auth.php';

include 'finance.php';

$row_od = $dbconnect->query("SELECT * FROM order_data join user on user.id_user=order_data.id_user");


header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=finance.xls");
header("Pragma: no-cache");
header("Expires: 0");


?>
<!-- TABLE HERE -->
<table>
   <thead>
      <tr>
         <th width="1%">No.</th>
         <th>Ord. ID</th>
         <th>Customer</th>
         <th>Contact</th>
         <th>Address</th>
         <th>Prod. ID</th>
         <th>Amount</th>
         <th>Price</th>
         <th>Order Date</th>
         <th width="15%">Payment Status</th>
      </tr>
   </thead>
   <tbody>

      <?php if ($row_od->rowCount() > 0) {
         $no = 1;
         while ($data = $row_od->fetch()) {
      ?>

            <tr>
               <td><?php echo $no ?></td>
               <td><?php echo $data['id_order'] ?></td>
               <td><?php echo $data['name'] ?></td>
               <td><?php echo $data['phone'] ?></td>
               <td><?php echo $data['address'] ?></td>
               <td><?php echo $data['id_Movingstorage'] ?></td>
               <td><?php echo $data['amount'] ?></td>
               <td><?php echo "Rp." . number_format($data['price']) . "" ?></td>
               <td><?php echo $data['order_date'] ?></td>
               <td><?php echo $data['payment_status'] ?></td>
            </tr>

      <?php $no++;
         }
      } ?>

   </tbody>
</table>




<h5>
      Cash Flow
</h5>

<table>
   <thead>
      <tr>
         <th>Total Amount</th>
         <th>Total Income</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><?php echo number_format($output_amount) ?></td>
         <td><?php echo "Rp. " . number_format($output) . '' ?></td>
      </tr>
   </tbody>
</table>


<h5>
      Cash Flow by Product ID
</h5>


      
<table>
   <thead>
      <tr>
         <th scope="col">No</th>
         <th scope="col">Product ID</th>
         <th scope="col">Total Amount</th>
         <th scope="col">Total Income</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>1</td>
         <td>ms_01</td>
         <td><?php echo $output_ms01_amount ?></td>
         <td><?php echo "Rp. " . number_format($output_ms01_price) . "" ?></td>
      </tr>
      <tr>
         <td>2</td>
         <td>ms_02</td>
         <td><?php echo $output_ms02_amount ?></td>
         <td><?php echo "Rp. " . number_format($output_ms02_price) . "" ?></td>
      </tr>
   </tbody>
</table>

<!-- End of Content -->
