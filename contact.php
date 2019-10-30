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

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
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
								<li class="drop with--one--item"><a href="index.php">Home</a></li>
								<li class="drop"><a href="#">Registro</a>
							  <li class="drop"><a href="shop-grid.html">Iniciar sesion</a>
								<li class="drop"><a href="shop-grid.html">Perfil</a>
								<li class="drop with--one--item"><a href="faq.php">F.A.Q</a>
								<li><a href="contact.php">Contacto</a></li>
							</ul>
									</div>
								</li>
									</div>
								</li>
									</div>
								</li>

									<div class="megamenu dropdown">
										<ul class="item item01">


											</li>

										</ul>
									</div>
								</li>



										</ul>
									</div>
								</li>

							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun"></span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.html">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart.html">View and edit cart</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>

										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about.html">About Page</a></li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="wishlist.html">Wishlist Page</a></li>
										<li><a href="error404.html">404 Page</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="team.html">Team Page</a></li>
									</ul>
								</li>
								<li><a href="shop-grid.html">Shop</a>
									<ul>
										<li><a href="shop-grid.html">Shop Grid</a></li>
										<li><a href="single-product.html">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Contacto</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Contacto</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
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
        <!-- End Contact Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
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
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->


</body>
</html>
