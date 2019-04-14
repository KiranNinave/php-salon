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
  <?php

  include 'includes/nav.php'
  ?>

  <div class="container" >
    <h1>login</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="index.php" >
    <div class="row" >
        <div class="col-4" >
        <p><input type="text" name="username" class="form-control" placeholder="Username" /></p>
        <p><input type="password" name="password" class="form-control" placeholder="Password" /></p>
        <p><input type="submit" name="login" value="login" class="btn btn-success" /></p>
        </div>
    </div>
        
    <form>
  </div>

</body>
<html>
   
?>