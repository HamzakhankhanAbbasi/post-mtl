<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Post MTL</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12">
					<div class="logo-box">
						<a href="index.php">
							<img src="assets/images/logo.png" alt="logo" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-12">
					<!-- RESPONSIVE NAVIGATION -->
					<div class="navigation-wrap">
						<div id="main-nav" class="stellarnav custom-nav">
							<ul>
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="products.php">Products</a></li>
								<li><a href="mission-stories.php">Mission & Stories</a></li>
								<li><a href="contact.php">Contacts</a></li>
								<li><a href="book-now.php"class="quote-btn">Book Now</a></li>
								<!--<li><a href="#!" data-bs-toggle="modal" data-bs-target="#quote-modal" class="quote-btn">Book Now</a></li>-->
								<li><a href="#!" data-bs-toggle="modal" data-bs-target="#login-signup" class="login-btn"><span><img src="assets/images/user-icon.png" alt="icon" class="img-fluid"></span>Login</a></li>
								<li><a class="cart-btn" data-bs-toggle="offcanvas" href="#sidebar-cart" role="button" aria-controls="sidebar-cart"><img src="assets/images/cart-icon.png" alt="icon" class="img-fluid"><span>1</span></a></li>
							</ul>
						</div>
					</div>
					<!-- RESPONSIVE NAVIGATION -->
				</div>
			</div>
		</div>
	</header>


	<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-cart" aria-labelledby="offcanvasExampleLabel">
		<div class="cart-sidebar-inner">
			<div class="top">
				<p>Cart</p>
			</div>
			<div class="cart-items-wrap">
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/product-img-1.png" class="img-fluid" alt="product">
					</div>
					<div class="cart-desc">
						<p class="name">Product Name</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus"><i class="fas fa-minus"></i></span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus"><i class="fas fa-plus"></i></span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="amount">
					<p><span>Total:</span><span>$15.00</span></p>
				</div>
				<div class="cart-button">
					<a href="cart.php">Go To Cart</a>
					<a href="checkout.php">Checkout</a>
				</div>
			</div>
		</div>
	</div>
