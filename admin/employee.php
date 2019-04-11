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
  <?php include 'includes/nav.php' ?>

  <div class="container" >
    <h1>Salon details</h1>
    <?php
      $id = $_GET['id'];

      $query = "SELECT * from salon where id=$id";

      $result = mysqli_query($conn, $query);
      if(!$result){
        echo "error!, cant retrive store details";
      }
      else{
        $row = mysqli_fetch_array($result);
        echo '
        <form class="form-group"  method="post" enctype="multipart/form-data" action="php/update_salon.php?id='. $id .'" >
          <p>
            <input type="text" required placeholder="salon name" name="salon_name" value='.$row[1].' class="form-control" />
          </p>
          <p>
            <input type="text" class="form-control" required placeholder="description" value='.$row[2].' name="salon_description" />
          </p>
          <p>
            <input type="text" class="form-control" required placeholder="address" value='.$row[3].' name="store_address" />
          </p>
          <p>
            <input type="number" required class="form-control" placeholder="contact no" value='.$row[4].' name="store_contact" ></textarea>
          </p>
          <p>
            <button type="submit" class="btn btn-success"> update </button>
            <a href="php/delete_salon.php?id='.$id.'" class="btn btn-danger">Delete</a>
          </p>
        <form>
        ';
      }
     ?>

      <hr />
        <h1>Employees</h1>
        <?php
          $query = "SELECT * FROM employee WHERE salon_id=$id";
          $result = mysqli_query($conn, $query);
          if(!$result){
            echo "unable to fetch results";
          }
          else{
            echo '
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">skills</th>
                  <th scope="col">contact</th>
                </tr>
              </thead>
              <tbody>
            ';
            while($row = mysqli_fetch_array($result)){
              echo '
              <tr>
                <th scope="row">'. $row[0] .'</th>
                <td><a href="update_employee.php?id='.$row[0].'" >'. $row[1].'</a></td>
                <td>'.$row[2].'</td>
                <td>'.$row[3].'</td>
              </tr>
              ';
            }
            echo '</tbody></table>';
          }
         ?>
        <a class="btn btn-primary" href="add_employee.php?id=<?php echo $id ?>">add</a>
  </div>
</body>
<html>
