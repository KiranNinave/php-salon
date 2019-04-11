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

  $salon_name = $_POST['salon_name'];
  $salon_description = $_POST['salon_description'];
  $store_address = $_POST['store_address'];
  $store_contact = $_POST['store_contact'];

  $query = "UPDATE salon SET name = '$salon_name' , description = '$salon_description', address = '$store_address', contact = '$store_contact' WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            salon updated!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to update your salon!
          </div>";
  }

?>
  </div>
</body>
<html>
