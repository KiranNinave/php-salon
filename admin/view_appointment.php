<?php
  require('php/connect.php');
?>
<html>
<head>
  <title>admin</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" ></link>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" >
  <?php

  include 'includes/nav.php';

  $id = $_GET['id'];

  $query = "SELECT * FROM appointment where id=$id";
  $result = mysqli_query($conn, $query);
  if($result){
    $row = mysqli_fetch_array($result);
    echo '
    <h1>Appointment</h1>
    <div class="row">
        <div class="col-3" >
        <h3>id : </h3>
        <h3>name : </h3>
        <h3>email : </h3>
        <h3>date : </h3>
        <h3>time : </h3>
        <h3>message : </h3>
        </div>
        <div class="col-9" >
        <h3> '.$row[0].' </h3>
        <h3> '.$row[1].' </h3>
        <h3> '.$row[2].' </h3>
        <h3> '.$row[3].' </h3>
        <h3> '.$row[4].' </h3>
        <h3> '.$row[5].' </h3>
        </div>
    </div>
   
    ';
  }
  else{
    echo "unable to retrive employee details!";
  }

  ?>



  </div>

</body>
<html>
