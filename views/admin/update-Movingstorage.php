<?php 
  include 'header.php'; 
  $id_Movingstorage = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM Movingstorage WHERE id_Movingstorage = '$id_Movingstorage'");
  $data = $row->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Moving Storage</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Moving Storage</h6>
		</div>  
		
		<form method="post" action="../../system/updateMovingstorage.php">
			<div class="card-body">
	            <div class="form-group">
                	<label>Product Code</label>
                	<input type="text" class="form-control form-control-sm" name="id_Movingstorage" value="<?php echo $data['id_Movingstorage'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Name</label>
                	<input type="text" class="form-control form-control-sm" name="engine_name" value="<?php echo $data['engine_name'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Color</label>
                	<input type="text" class="form-control form-control-sm" name="color" value="<?php echo $data['color'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Price</label>
                	<input type="number" class="form-control form-control-sm" name="price" value="<?php echo $data['price'] ?>" required>
                </div>
                <div class="form-group">
                  <label>Stock</label>
                  <input type="number" class="form-control form-control-sm" name="stock" value="<?php echo $data['stock'] ?>" required>
                </div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Update Movingstorage">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>