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

  $query = "SELECT * FROM product where id=$id";
  $result = mysqli_query($conn, $query);
  if($result){
    $row = mysqli_fetch_array($result);
    echo '
    <h1>update employee</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="php/update_product.php?id='.$id.'" >
    <p>
    <input type="text" value="'. $row[1] .'" required placeholder="product name" name="product_name" class="form-control" />
    </p>
    <p>
    <input type="number" value="'.$row[2].'" class="form-control" required placeholder="product price" name="product price" />
    </p>
      <p>
        <button type="submit" class="btn btn-success"> update </button>
        <a class="btn btn-danger" href="php/delete_product.php?id='.$id.'">delete</a>
      </p>
    <form>
    ';
  }
  else{
    echo "unable to retrive employee details!";
  }

  ?>



  </div>

</body>
<html>
