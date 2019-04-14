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
    <h1>Add product</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="php/add_product.php?id=<?php echo $_GET['id'] ?>" >
      <p>
        <input type="text" required placeholder="product name" name="product_name" class="form-control" />
      </p>
      <p>
        <input type="number" class="form-control" required placeholder="product price" name="product price" />
      </p>
      <p>
        <button type="submit" class="btn btn-success"> add </button>
      </p>
    <form>
  </div>

</body>
<html>
   
?>