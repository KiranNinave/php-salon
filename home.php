<?php 
  $id = $_GET['id'];
  require('admin/php/connect.php');

  $query = "SELECT * FROM salon WHERE id=$id";

  $result = mysqli_query($conn, $query);

  if($result){
    $row = mysqli_fetch_array($result);
  }
  else{
    echo "<h1>error! , fail to retrive data</h1> !";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>Beauty Salon</title>
    <!-- Loading third party fonts -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link
      href="fonts/novecento-font/novecento-font.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css" />

    <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
  </head>

  <body class="homepage header-collapse">
    <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a id="branding" href="index.html">
            <img src="images/logo.png" alt="Company name" class="logo" />
            <div class="logo-copy">
              <h1 class="site-title"><?php echo $row[1] ?></h1>
              <small class="site-description">Always the best!</small>
            </div>
          </a>
          <!-- #branding -->

          <!-- Default snippet for navigation -->
          <div class="main-navigation">
            <button type="button" class="menu-toggle">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="menu">
              <li class="menu-item current-menu-item">
                <a href="home.php?id=<?php echo $id ?>">Home</a>
              </li>

              <li class="menu-item"><a href="service.php?id=<?php echo $id ?>">Services</a></li>

              <li class="menu-item"><a href="contact.php?id=<?php echo $id ?>">Contact</a></li>
            </ul>
            <!-- .menu -->
          </div>
          <!-- .main-navigation -->

          <div class="mobile-navigation"></div>
        </div>
      </header>

      <div class="hero hero-slider">
        <ul class="slides">
          <li data-bg-image="dummy/slider-1.jpg">
            <div class="container">
              <h3 class="slider-subtitle"><?php echo $row[1] ?></h3>
              <h2 class="slider-title">Professional</h2>
              <p>
                <?php echo $row[2] ?>
              </p>
              <a href="#" class="button large">Read more</a>
            </div>
          </li>
          
         
        </ul>
      </div>

      <main class="main-content">
        <div class="fullwidth-block features-section">
          <div class="container">
            <h2 class="section-title">our Services</h2>
            <div class="row">
              <div class="col-md-3">
                <div class="feature">
                  <img src="images/icon-1.png" class="feature-image" />
                  <h3 class="feature-title">Voluptatem</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aspernatur dolor perferendis blanditiis voluptate maiores
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="feature">
                  <img src="images/icon-2.png" class="feature-image" />
                  <h3 class="feature-title">COnsequatur</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Esse, minus, totam. Officia ea accusamus quis tenetur quas
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="feature">
                  <img src="images/icon-3.png" class="feature-image" />
                  <h3 class="feature-title">Temporibus</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Iste, omnis cum, quo dolorem molestias asperiores doloremque
                    dolorum
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="feature">
                  <img src="images/icon-4.png" class="feature-image" />
                  <h3 class="feature-title">Perferendis</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quisquam, facere numquam porro amet reiciendis maiores odio
                    velit
                  </p>
                </div>
              </div>
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </div>
        <!-- .fullwidth-block.features-section -->

        <div class="fullwidth-block team-section">
          <div class="container">
            <h2 class="section-title">Our team</h2>
            <div class="row">
              <?php
                $query2 = "SELECT * FROM employee WHERE salon_id=$id";
                $result2 = mysqli_query($conn, $query2);
                if($result2){
                  while($row2 = mysqli_fetch_array($result2)){
                    echo '
                    <div class="col-md-3">
                    <div class="team">
                      <figure class="team-image">
                        <img src="uploads/'.$row2[3].'" />
                      </figure>
                      <h3 class="team-name">'.$row2[1].'</h3>
                      <p>
                        '.$row2[2].'
                      </p>
                      <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                    ';
                  }
                }
                else{
                  echo "<h1>Employee retrival failed!</h1>";
                }
              ?>
              
              
            
              
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </div>
        <!-- .fullwidth-block.team-section -->

        <div class="fullwidth-block information-section">
          <div class="container">
            <h2 class="section-title">Information</h2>
            <div class="row">
              <div class="col-md-4">
                <figure><img src="uploads/<?php echo $row[5] ?>" /></figure>
              </div>

              <div class="col-md-4">
                <p>
                  <?php echo $row[3] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- .fullwidth-block.information-section -->
      </main>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="widget contact-widget">
                <h3 class="widget-title">Contact</h3>
                <div class="contact-info">
                  <address>
                    <img src="images/icon-map-small.png" class="icon" />
                    <p>
                      <strong><?php echo $row[1] ?></strong> <?php echo $row[3]  ?>
                    </p>
                  </address>
                  
                  <a href="tel:(500)942042259" class="phone"
                    ><img
                      src="images/icon-phone-small.png"
                      class="icon"
                    /><?php echo $row[4] ?></a
                  >
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget">
                <h3 class="widget-title">Social Media</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Provident et praesentium
                </p>
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
