<?php
session_start();

  if($_POST){
    $errores=[];
    $usuario=[];
    $_SESSION['selogeo']="";
    if($_POST['email']!=''){
      $email=$_POST['email'];
    }
    else{
      $errores[]="Ingrese su email";
    }
    if($_POST['password']!=''){
      $password=$_POST['password'];
    }
    else{
      $errores[]="Ingrese su contraseña";
    }
    if(empty($errores)){

    $usuariosjson=FILE_GET_CONTENTS('usuario.json');
    $datosusuarios=json_decode($usuariosjson,true);

  }
}
 if(isset($_SESSION['selogeo'])){

   $_SESSION['email']='';
   $_SESSION['nombres']='';
   $_SESSION['selogeo']='';
 }
  if(isset($_POST['mantenerme']) && $_SESSION['selogeo']==true){
    setcookie('email', $email, time() + 60*60*24*30);
    header('location:perfil.php');
  }
  else{
    if(isset($_SESSION['selogeo'])){
      header('location:perfil.php');
    }
  }

 ?>
 <!doctype html>
 <html class="no-js" lang="zxx">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="x-ua-compatible" content="ie=edge">
 	<title>Iniciar sesion /Dayross</title>
 	<meta name="description" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">


 	<link rel="shortcut icon" href="images/favicon.ico">
 	<link rel="apple-touch-icon" href="images/icon.png">

 	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
 	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

 	<!-- Stylesheets -->
  <link rel="stylesheet" href="perfil.php">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  </head>
  <body>
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
  								<li class="drop"><a href="registro.php">Registro</a>
  							  <li class="drop"><a href="login.php">Iniciar sesion</a>
  								<li class="drop"><a href="shop-grid.php">Perfil</a>
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
  											<a class="checkout__btn" href="cart.php">Go to Checkout</a>
  										</div>
  										<div class="single__items">
  											<div class="miniproduct">
  												<div class="item01 d-flex">
  													<div class="thumb">
  														<a href="product-details.php"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
  													</div>
  													<div class="content">
  														<h6><a href="product-details.php">Voyage Yoga Bag</a></h6>
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
  														<a href="product-details.php"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
  													</div>
  													<div class="content">
  														<h6><a href="product-details.php">Impulse Duffle</a></h6>
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
  														<a href="product-details.php"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
  													</div>
  													<div class="content">
  														<h6><a href="product-details.php">Compete Track Tote</a></h6>
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
  											<a class="cart__btn" href="cart.php">View and edit cart</a>
  										</div>
  									</div>
  								</div>
  								<!-- End Shopping Cart -->
  							</li>

  				<!-- Start Mobile Menu -->
  				<div class="row d-none">
  					<div class="col-lg-12 d-none">
  						<nav class="mobilemenu__nav">
  							<ul class="meninmenu">
  								<li><a href="index.php">Home</a></li>
  								<li><a href="#">Pages</a>
  									<ul>
  										<li><a href="about.php">About Page</a></li>
  										<li><a href="portfolio.php">Portfolio</a>
  											<ul>
  												<li><a href="portfolio.php">Portfolio</a></li>
  												<li><a href="portfolio-details.php">Portfolio Details</a></li>
  											</ul>
  										</li>
  										
  										<li><a href="cart.php">Cart Page</a></li>


  										<li><a href="faq.php">Faq Page</a></li>

  									</ul>
  								</li>
  								<li><a href="shop-grid.php">Shop</a>
  									<ul>
  										<li><a href="shop-grid.php">Shop Grid</a></li>
  										<li><a href="single-product.php">Single Product</a></li>
  									</ul>
  								</li>

  								<li><a href="login.php">Iniciar sesion</a></li>
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
          <div class="ht__bradcaump__area bg-image--3">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="bradcaump__inner text-center">
                          	<h2 class="bradcaump-title">Iniciar sesion</h2>
                              <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Iniciar sesion</span>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    <?php //incluyo el header:
      ?>

    <div class="container">
      <h4>Iniciar Sesión</h4>

      <?php
      if($_POST){
      if($_SESSION['selogeo']!=true && empty($errores)){
      echo "email o contraseña invalida";
    }
    else{
      foreach($errores as $error){
        echo $error;
        echo '<br>';
      }
  }
  echo '<br>';
}
       ?>
      <form class="" action="login.php" method="post" enctype="multipart/form-data">
      <input class="controles" type="email" name="email" value="" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">
      <input type="checkbox" name="mantenerme" value="">
      <label for="">Mantenerme logueado</label>
      <button class="" type="submit" class="btn btn-secondary btn-sm">Login</button>
      </form>
      <p>No tienes cuenta? <a class="link" href="registro.php">Registrate</a></a> </p>



    </div>


















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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
   <!-- //Footer Area -->

 </div>
 <!-- //Main wrapper -->

 <!-- JS Files -->


 </body>
 </html>
