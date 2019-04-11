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

  $employee_name = $_POST['employee_name'];
  $employee_skills = $_POST['employee_skills'];
  $employee_contact = $_POST['employee_contact'];


  $query = "UPDATE employee SET name = '$employee_name' , skills = '$employee_skills', contact = '$employee_contact' WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            employee updated!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to update your employee!
          </div>";
  }
?>
  </div>
</body>
<html>
