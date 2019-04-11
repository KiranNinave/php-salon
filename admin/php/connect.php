<?php
  $conn = mysqli_connect("localhost", "root", "", "salon");
  if(!$conn){
    echo "database not not connected";
    exit();
  }
?>
