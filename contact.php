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

    <title>Beauty Salon | Contact</title>
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

  <body>
    <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a id="branding" href="index.php">
            <img src="images/logo.png" alt="Company name" class="logo" />
            <div class="logo-copy">
           
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

      <main class="main-content">
        <div class="page">
          <div class="container">
            <p>
              you can contact us, to schedule your appointment!, once you submit your form we will contact you on given email, so please make sure that your email is correct. we will always try hard to get you the best deals!
            </p>

            <div class="row">
              <div class="col-md-8">
                <form action="add_appointment.php?id=<?php echo $id ?>" class="contact-form" method="post">
                  <input type="text" name="name" require id="name" placeholder="Name..." />
                  <input type="text" name="email" require id="email" placeholder="Email..." />
                  <input type="date" name="date" require id="website" placeholder="Date..." />
                  <input type="time" name="time" require id="time" placeholder="Time..." />
                  <textarea
                    name="msg"
                    id="message"
                    placeholder="Message..."
                    require
                  ></textarea>
                  <div class="text-right">
                    <button class="button large" type="submit">
                      request appointment
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
                      <strong>Company name</strong> 563 Avenue Street, New York
                    </p>
                  </address>
                  <a href="mailto:contact@companyname.com" class="mail"
                    ><img
                      src="images/icon-envelope-small.png"
                      class="icon"
                    />contact@companyname.com</a
                  >
                  <a href="tel:(500)942042259" class="phone"
                    ><img
                      src="images/icon-phone-small.png"
                      class="icon"
                    />(500)942042259</a
                  >
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget">
                <h3 class="widget-title">Social Media</h3>
                <p>
                Focus on how to be social, not on how to do social.
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
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
