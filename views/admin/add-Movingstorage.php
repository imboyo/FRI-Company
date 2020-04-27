<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM Movingstorage");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Moving Storage</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add Moving Storage</h6>
		</div>  
		
		<form method="post" action="../../system/addMovingstorage.php">
			<div class="card-body">
	            <div class="form-group">
	            	<label>ID Moving Storage</label>
	            	<input type="text" class="form-control form-control-sm" name="id_Movingstorage" placeholder="Input ID Movingstorage . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Product Name</label>
	            	<input type="text" class="form-control form-control-sm" name="engine_name" placeholder="Input name . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Color</label>
	            	<input type="text" class="form-control form-control-sm" name="color" placeholder="Input color . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Price</label>
	            	<input type="number" class="form-control form-control-sm" name="price" placeholder="Input price . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Stock</label>
	            	<input type="number" class="form-control form-control-sm" name="stock" placeholder="Input stock . ." required>
	        	</div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Movingstorage">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>