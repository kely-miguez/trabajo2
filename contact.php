<?php
$errores = [];
if ($_POST) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
  $website = $_POST['website'];
  $message = $_POST['message'];
	if (empty($firstname)) {
		$errores['firstname'] = 'El campo nombre esta vacio..';
	}
	if (empty($lastname)) {
		$errores['lastname'] = 'El campo apellido esta vacio..';
	}
	if (empty($email)) {
		$errores['email'] = 'El campo email esta vacio..';
	}
	if (empty($website)) {
		$errores['website'] = 'El campo numero esta vacio..';
	}
	if(empty($message)){
		$errores['message'] = 'El campo mensaje esta vacio..';
	}
	if (!$errores) {
	 echo "todo ok!";
	}
}
 ?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Contacto /Dayross</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div class="wrapper" id="wrapper">

		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/318/2342459318_d7484af5-64db-4947-976b-1069df3db2a5.png?cb=1571669948" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop"><a href="index.php">Home</a></li>
								<li class="drop"><a href="registro.php">Registro</a>
							  <li class="drop"><a href="login.php">Iniciar sesion</a>							
								<li class="drop"><a href="faq.php">F.A.Q</a>
							<li class="drop"><a href="contact.php">Contacto</a>
							</ul>
									</div>
								</li>
									</div>
								</li>
									</div>
								</li>
              			</li>
									</div>
								</li>
						</nav>
		</header>
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Contacto</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Contacto</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="wn_contact_area bg--white pt--80 pb--80">

        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
        					<h2 class="contact__title">Mensaje.</h2>

                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form space-between">
																	<input type="text" value='<?=$firstname ?? '' ?>' name="firstname" placeholder="Nombre*">
																	<small style="color : red;"><?=$errores['firstname'] ?? '' ?></small>
																	<input type="text" value='<?=$lastname ?? '' ?>' name="lastname" placeholder="Apellido*">
																		<small style="color : red;"><?=$errores['lastname'] ?? '' ?></small>
                                </div>
                                <div class="single-contact-form space-between">
																	<input type="email" value='<?=$email ?? '' ?>' name="email" placeholder="Email*">
																		<small style="color : red;"><?=$errores['email'] ?? '' ?></small>
																	<input type="text" value='<?=$website ?? '' ?>' name="website" placeholder="telefono*">
																		<small style="color : red;"><?=$errores['website'] ?? '' ?></small>
                                </div>

                                <div class="single-contact-form message">
																	<textarea type ="text" name="message" value='<?=$message ?? '' ?>' placeholder="Dejanos tu mensaje..."></textarea>
																			<small style="color : red;"><?=$errores['message'] ?? '' ?></small>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege">
                        </div>
        			</div>
        			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__address">
        					<h2 class="contact__title">Contactanos.</h2>
        					<div class="wn__addres__wreapper">
        						<div class="single__address">
        							<i class="icon-location-pin icons"></i>
        							<div class="content">
        								<span>Direccion:</span>
        								<p>666 5th Ave New York, NY, United</p>
        							</div>
        						</div>
        						<div class="single__address">
        							<i class="icon-phone icons"></i>
        							<div class="content">
        								<span>telefono:</span>
        								<p>1166546766</p>
        							</div>
        						</div>
        						<div class="single__address">
        							<i class="icon-envelope icons"></i>
        							<div class="content">
        								<span>Email:</span>
        								<p>dayross@gmail.com</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.php">
											<img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/318/2342459318_d7484af5-64db-4947-976b-1069df3db2a5.png?cb=1571669948" alt="logo images">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
</body>
</html>
