<?php include 'header.php';

include "../../config/conn.php";

$feedback_result = mysqli_query($conn, "SELECT * FROM feedback");


?>
<!-- CONTENT HERE -->

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Home</span>
</div>

<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Comment</th>
      </tr>
    </thead>

    <tbody>
      <?php $no = 1 ?>
      <?php while ($feedback = mysqli_fetch_assoc($feedback_result)) : ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $feedback["username"] ?></td>
          <td><?php echo $feedback["comment"] ?></td>
        </tr>
       <?php $no++ ?>
      <?php endwhile ?>
    </tbody>

  </table>
</div>


<!-- END OF CONTENT -->

<?php include 'footer.php'; ?>