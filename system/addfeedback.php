<?php

include "../config/conn.php";

$username_feedback = $_POST['username-feedback'];
$comment_feedback = $_POST['comment-feedback'];

$row_feedback = $dbconnect->query("INSERT INTO feedback (username, comment) VALUES ('$username_feedback', '$comment_feedback')");

include "../views/footer.php";

if(mysqli_affected_rows($conn) > 0) {
   echo "<script>
      alert(' Thanks for your feedback ');
      document.location.href = '../views/customer/home.php';
   </script>" ;
}  else {
   echo "<script>
      alert(' Thanks for your feedback');
      document.location.href = '../views/customer/home.php';
   </script>";
}


