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
  


  $query = "UPDATE product SET name = '$product_name' , price = '$product_price' WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            product updated!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to update your product!
          </div>";
  }
?>
  </div>
</body>
<html>
