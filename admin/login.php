<?php
  session_start();
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
    <h1>login</h1>
    <form class="form-group"  method="post" enctype="multipart/form-data" action="" >
    <div class="row" >
        <div class="col-4" >
        <p><input type="text" name="username" class="form-control" placeholder="Username" require /></p>
        <p><input type="password" name="password" class="form-control" placeholder="Password" require /></p>
        <p><input type="submit" name="login" value="login" class="btn btn-success" /></p>
        </div>
    </div>
        
    <form>
  </div>

</body>
<html>

<?php

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' and $password == 'admin'){
      $_SESSION['username'] = $username;
      header('location: index.php');
    }
    else{
      echo "Invalid username or password!";
    }
}

?>