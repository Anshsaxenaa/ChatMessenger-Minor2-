<?php
  $hostname = "localhost";
  $username = "u550600192_currency";
  $password = "U550600192_currency";
  $dbname = "u550600192_currency";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
