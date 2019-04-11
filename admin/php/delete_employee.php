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

  $query = "DELETE FROM employee WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-danger' role='alert'>
            employee deleted!
          </div>";
    echo "<a class='btn btn-primary' href='../index.php'> home </a>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to delete your employee!
          </div>";
  }

?>
  </div>
</body>
<html>
