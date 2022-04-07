<?php
  $conn=mysqli_connect("localhost","root","","foodWebsite");  //$conn is connecting to the database
  if(!$conn)
  {
    echo "Database connected".mysqli_connect_error();       // mysqli_connect_error() is used for showing the error while connecting to the database
  }
?>