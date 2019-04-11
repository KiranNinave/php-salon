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
  $skills = $_POST['employee_skills'];
  $employee_contact = $_POST['employee_contact'];

  $image = $_FILES['employee_image']['tmp_name'];
  $image_name = $_FILES['employee_image']['name'];

  $target_dir = "../../uploads/".$image_name;

  file_put_contents($target_dir,   file_get_contents($image));


  $query = "INSERT INTO employee(name, skills, image, contact, salon_id) VALUES('$employee_name', '$skills', '$image_name', '$employee_contact', $id)";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<div class='alert alert-success' role='alert'>
            employee added!
          </div>";
  }
  else{
    echo "<div class='alert alert-danger' role='alert'>
            unable to add your employee!
          </div>";
  }

?>
  </div>
</body>
<html>
