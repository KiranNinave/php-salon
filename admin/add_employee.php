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
    <h1>Add employee</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="php/add_employee.php?id=<?php echo $_GET['id'] ?>" >
      <p>
        <input type="text" required placeholder="employee name" name="employee_name" class="form-control" />
      </p>
      <p>
        <input type="text" class="form-control" required placeholder="skills" name="employee_skills" />
      </p>
      <p>
        <input type="number" required class="form-control" placeholder="contact no" name="employee_contact" ></textarea>
      </p>
      <p>
        <label>employee photo </label>
       <input type="file" name="employee_image" class="form-control" required>
     </p>
      <p>
        <button type="submit" class="btn btn-success"> add </button>
      </p>
    <form>
  </div>

</body>
<html>
