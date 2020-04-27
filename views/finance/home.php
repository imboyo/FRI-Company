<?php
include 'header.php';

$row_od = $dbconnect->query("SELECT * FROM order_data join user on user.id_user=order_data.id_user");

?>


<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Report</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->

<div class="row justify-content-center text-gray">
  <div class="col-lg-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Report</h6>
      </div>

      <div class="card-body">

        <!-- TABLE HERE -->
        <div class="table-responsive">
          <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
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
          <button type="button" class="btn btn-link"><a href="create-excel.php" target="_blank">Download Excel</a></button>
        </div>
        
        <!-- END OF TABLE -->
      </div>

    </div>
  </div>
</div>

<!-- Table Bendahara -->
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Cash Flow
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Total Amount</th>
              <th scope="col">Total Income</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo number_format($output_amount) ?></td>
              <td><?php echo "Rp. " . number_format($output) . '' ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Cash Flow by Product ID
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover">
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
      </div>
    </div>
  </div>
</div>

<!-- End of Content -->



<?php include 'footer.php' ?>