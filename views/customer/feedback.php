<?php


include 'header.php';
$row_feedback = $dbconnect->query("SELECT * FROM feedback");

?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <!-- TITLE -->
   <span><i class="fa fa-angle-right">&nbsp;</i>Feedback</span>
</div>
<!-- Jumbotron -->


<div class="jumbotron jumbotron-fluid feedback-jumbo text-white">
   <div class="container">
      <h1 class="display-4">Thanks for Your Feedback</h1>
      <p class="lead">Your Feedback Make us Better</p>
   </div>
</div>

<form method="POST" action="../../system/addfeedback.php" id="form-feedback">
   <div class="form-inline" style="margin-bottom: 20px; margin-left: -20px">
      <input type="text" id="username" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Username" name="username-feedback">
   </div>
   <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment-feedback" form="form-feedback"></textarea>
   </div>
   <div class="card-footer al-right">
      <input type="submit" class="btn btn-sm btn-success">
</form>
