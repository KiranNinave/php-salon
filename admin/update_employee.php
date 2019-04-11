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

  $query = "SELECT * FROM EMPLOYEE where id=$id";
  $result = mysqli_query($conn, $query);
  if($result){
    $row = mysqli_fetch_array($result);
    echo '
    <h1>update employee</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="php/update_employee.php?id='.$id.'" >
      <p>
        <input type="text" required placeholder="employee name" name="employee_name" class="form-control" value="'.$row[1].'" />
      </p>
      <p>
        <input type="text" class="form-control" required placeholder="skills" name="employee_skills" value="'. $row[2] .'"  />
      </p>
      <p>
        <input type="number" required class="form-control" placeholder="contact no" name="employee_contact" value="'.$row[4].'" ></textarea>
      </p>
      <p>
        <button type="submit" class="btn btn-success"> update </button>
        <a class="btn btn-danger" href="php/delete_employee.php?id='.$id.'">delete</a>
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
