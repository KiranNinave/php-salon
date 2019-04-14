<html>
<head>
  <title>admin</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" ></link>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
  <?php include '../includes/nav.php' ?>
  <div class="container" >

<?php
  require('connect.php');

  $id = $_GET['id'];

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];


  $query = "INSERT INTO product(name, price, salon_id) VALUES('$product_name','$product_price', $id)";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            product added!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to add your product!
          </div>";
  }

?>
  </div>
</body>
<html>
