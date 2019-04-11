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
    <h1>Add salon</h1>
    <form class="form-group" enctype="multipart/form-data"  method="post" action="php/add_salon.php" >
      <p>
        <input type="text" required placeholder="salon name" name="salon_name" class="form-control" />
      </p>
      <p>
        <textarea class="form-control" required placeholder="description" name="salon_description"></textarea>
      </p>
      <p>
        <textarea class="form-control" required placeholder="address" name="store_address"></textarea>
      </p>
      <p>
        <input type="number" required class="form-control" placeholder="contact no" name="store_contact" ></textarea>
      </p>
      <p>
        <label>salon photo </label>
       <input type="file" name="store_image" class="form-control" placeholder="salon photo" required>
     </p>
      <p>
        <button type="submit" class="btn btn-success"> add </button>
      </p>
    <form>
      <hr />
        <h1>salons</h1>
        <?php
          $query = "SELECT * FROM salon";
          $result = mysqli_query($conn, $query);
          if(!$result){
            echo "fail to get salons!";
          }else{
            echo '<table class="table">
                    <thead>
                      <tr>
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">discription</th>
                      <th scope="col">address</th>
                      <th scope="col">contact</th>
                    </tr>
                  </thead> <tbody>';
            while($row = mysqli_fetch_array($result)){
              echo "
                <tr>
                  <th scope='row'>". $row[0] ."</th>
                  <td><a href='employee.php?id=".$row[0]."' >".$row[1]."</a></td>
                  <td>".$row[2]."</td>
                  <td>".$row[3]."</td>
                  <td>".$row[4]."</td>
                </tr>
              ";
            }
            echo '</tbody></table>';
          }
         ?>
  </div>

</body>
<html>
