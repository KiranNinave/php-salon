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

  $salon_name = $_POST['salon_name'];
  $salon_description = $_POST['salon_description'];
  $store_address = $_POST['store_address'];
  $store_contact = $_POST['store_contact'];

  $image = $_FILES['store_image']['tmp_name'];
  $image_name = $_FILES['store_image']['name'];

  $target_dir = "../../uploads/".$image_name;

  file_put_contents($target_dir,   file_get_contents($image));


  $query = "INSERT INTO salon(name, description, address, contact, image) VALUES('$salon_name', '$salon_description', '$store_address', '$store_contact', '$image_name')";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            salon added!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to add your salon!
          </div>";
  }

?>
  </div>
</body>
<html>
