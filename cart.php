<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Compras</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

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
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
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
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">

							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun"></span></a>
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>CERRAR</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>###</span>
											<span>Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>###</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.php">COMPRAR</a>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart.php">EDITAR COMPRA</a>
										</div>
									</div>
								</div>
							</li>
		</header>
							</li>
			</div>
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
		</div><br>

        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Imagen</th>
                                            <th class="product-name">Producto</th>
                                            <th class="product-price">Precio</th>
                                            <th class="product-quantity">Cantidad</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/books/1.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">VESTIDO</a></td>
                                            <td class="product-price"><span class="amount">$220.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$220.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/books/21.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">Conjunto</a></td>
                                            <td class="product-price"><span class="amount">$250.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$250.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/books/22.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">Pantalon</a></td>
                                            <td class="product-price"><span class="amount">$650.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$650.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>$1120.00</li>
                                    <li>$1120.00</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>$1120.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>

</body>
</html>
