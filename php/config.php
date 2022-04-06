<?php
  $conn=mysqli_connect("localhost","root","","foodWebsite");
  if(!$conn)
  {
    echo "Database connected".mysqli_connect_error();
  }
?>