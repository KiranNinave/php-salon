<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Beauty Salon | Gallery</title>
		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

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
						<img src="images/logo.png" alt="Company name" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Salons</h1>
							<small class="site-description">Always get best!</small>
						</div>
					</a> <!-- #branding -->
				</div>
			</header>

			<main class="main-content">
				<div class="page">
					<div class="container">
						<div class="text-center">


						<div class="filterable-items">

              <?php
                require('admin/php/connect.php');

                $query = "SELECT * from salon";
                $result = mysqli_query($conn, $query);
                if(!$result){
                  echo "fail to retrive salons";
                }
                else{
                  while($row = mysqli_fetch_array($result)){
                      echo '
                      <div class="gallery-item filterable-item face">
                        <a href="home.php?id='.$row[0].'">
                          <figure class="featured-image">
                            <img src="uploads/'.$row[5].'" alt="image not found!">
                            <figcaption>
                              <h2 class="gallery-title">'.$row[1].'</h2>
                              <p>'.$row[2].'</p>
                            </figcaption>
                          </figure>
                        </a>
                      </div>
                      ';
                  }
                }

              ?>



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
										<img src="images/icon-map-small.png" class="icon">
										<p><strong>Company name</strong> 563 Avenue Street, New York</p>
									</address>
									<a href="mailto:contact@companyname.com" class="mail"><img src="images/icon-envelope-small.png" class="icon">contact@companyname.com</a>
									<a href="tel:(500)942042259" class="phone"><img src="images/icon-phone-small.png" class="icon">(500)942042259</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
								<form action="#" class="subscribe-form">
									<input type="email" placeholder="Enter our email...">
									<input type="submit" value="Sign up">
								</form>
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
