<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  

  <head>
		<meta charset="utf-8">
		<title>PimpMyRide</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="assets/css/style1.css">
    	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	</head>



    
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
     
      
 <!--Navigation bar-->
 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Seguridad Informática</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="about.php">Acerca de</a></li>
                    <li><a href="contact.php">Contáctanos</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
	</nav>

    <section id="showcase">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<div class="showcase-left" style="margin-top:100px;">
						<img src="img/aboutUsInfo.jpg">
					</div>	
				</div>

				<div class="col-md-7 col-sm-7">
					<div class="showcase-right">
							<h1 class="title-right">
								Nuestro Objetivo
							</h1>
							<p class= 'text' style="font-size: 32px;">
									Nuestro objetivo como grupo es informar a la mayor cantidad de 
									personas sobre la importancia de la seguridad informática dentro de las empresas, con el objetivo de reducir
									el volumen de ciberataques originados por la desinformacion de la poblacion.
							</p>
					</div>
					<br>
				</div>
			</div>
		</div>
	</section>
<!--Social Media information-->
	<section id="social-info">
		<div class="container">
			<ul>
				<li>
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<i class="fab fa-google-plus-g"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<i class="fab fa-whatsapp"></i>
					</a>
				</li>
			</ul>

		</div>

	</section>

    <footer>
		<p class="text-center">Seguridad de la Informacion &copy; 2019</p>
	</footer>

	<script> 
	window.sr = ScrollReveal();
	sr.reveal('.navbar', {
			duration: 2000,
			origin: 'bottom'
	});

	sr.reveal('.showcase-left',{
		duration: 1500,
		origin: 'left',
		distance: '300px'
	});
	sr.reveal('.title-right', {
		duration: 1500,
		origin: 'top',
		distance: '100px'

	});
	sr.reveal('.text', {
		duration: 1500,
		origin: 'right',
		distance: '300px'

	});
	sr.reveal('.showcase-btn', {
		duration: 1500,
		origin: 'right',
		distance: '300px'

	});
	sr.reveal('#social-info', {
		duration: 1500,
		origin: 'bottom',
		distance: '300px'

	});
	sr.reveal('.text-center', {
		duration: 1500,
		origin: 'bottom',
		delay: 1000
	});
		
		
	</script>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="JavaScript">
		function set_body_height() { // set body height = window height
		  $('body').height($(window).height());
		}
		$(document).ready(function() {
		  $(window).bind('resize', set_body_height);
		  set_body_height();
		});
	  </script>





      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>