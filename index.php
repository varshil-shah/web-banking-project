<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">
	<meta name="Description" content="Enter your description here" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<title>Mumbai Co-operative Bank</title>
</head>

<body>
	<!-- Creating navbar -->
	<section id="home">
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand animate__animated animate__bounceIn animate__repeat-1" href="#">Mumbai Co-operative Bank</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#service">Service</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="login.php">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>

	<!-- Carousel -->

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 banner" src="images/banner-1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 banner" src="images/banner-2.jpg" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- About Page -->

	<section class="about" id="about">
		<div class="container-fluid">
			<h2 class="text-center font-weight-bold py-5"><span class="text-danger">About</span><span class="text-warning"> Us</span></h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
					<img src="images/about-us.jpg" class="img-fluid mt-3" alt="">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h3 class="text-center mt-4">Wanna know more about us ? </h3>
					<p class="mt-3">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
						dolorum molestias rerum consequatur enim laudantium tempore maiores
						earum, quas quis, explicabo officia ratione molestiae libero magni
						recusandae nulla mollitia consectetur?Lorem ipsum dolor sit amet
						consectetur adipisicing elit. Voluptatem, temporibus voluptatibus
						dolores veniam quas illum perferendis reiciendis doloribus facere,
						laborum et libero fugiat in ab beatae vel error exercitationem
						architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
						veritatis impedit blanditiis odio corrupti quam modi, placeat,
						doloremque dolor esse, aut ipsam asperiores qui sunt delectus?
						Aspernatur officiis velit nihil! Lorem ipsum dolor sit, amet consectetur
						adipisicing elit. Iste doloremque voluptate natus, itaque ducimus
						distinctio quo id eos amet, ab impedit iure? Eveniet ex soluta veniam
						quaerat quos laborum mollitia.
					</p>
					<button class="btn btn-primary mb-3">Read More</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->

	<section class="service" id="service">
		<div class="container-fluid">
			<h2 class="text-center font-weight-bold py-5">Our Services</h2>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" style="width: 18rem;">
						<img class="card-img-top" src="images/transaction.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">Transaction
							</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" style="width: 18rem;" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
						<img class="card-img-top" src="images/atm.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">ATM</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" style="width: 18rem;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
						<img class="card-img-top" src="images/debitcard.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">Debit card
								transaction</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error. eos veniam expedita
								dolor ab soluta.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" style="width: 18rem;" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
						<img class="card-img-top" src="images/deposit.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">Deposit</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" style="width: 18rem;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
						<img class="card-img-top" src="images/online-banking.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">Check your
								amount</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mb-5 col-12">
					<div class="card w-100 shadow" style="width: 18rem;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
						<img class="card-img-top" src="images/cash-back.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center font-weight-bold">Cash back
							</h5>
							<p class="card-text">
								Lorem ipsum dolor, sit amet consectetur adipisicing
								elit. Reprehenderit commodi, eos veniam expedita dolor
								ab soluta vero quos ipsam error.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Login -->


	<!-- footer -->

	<section class="footer">
		<div class="container-fluid">
			<div class="row">
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 mt-5 text-center">
								<p>Home</p>
								<p>About</p>
								<p>Service</p>
								<p>Login</p>
							</div>
							<div class="col-lg-6 col-md-6 col-12 mt-5 text-center">
								<p>Online transaction</p>
								<p>Money Transfer</p>
								<p>ATM</p>
								<p>Cash back</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="formBx">
							<form action="subscribe.php" method="POST" id="subscribeForm">
								<div class="row mt-5">
									<div class="col-lg-10 col-md-10 col-12">
										<input id="myMail" type="email" placeholder="Subscribe our newsletter" name="subscribemail" class="w-100">
										<h5 id="result" class="text-center text-primary">
										</h5>
									</div>
									<div class="col-lg-2 col-md-2 col-2 mb-3">
										<button id="subscribe" class="btn btn-success mt-2" name="subscribe" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div>
						<h5 class="text-center font-weight-bold text-white">Designed and Created
							by <span class="text-success">Varshil Shah & Nishith Savla</span></h5>
					</div>
				</div>
			</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#subscribe').click(function(e) {
				e.preventDefault();
				$.ajax({
					method: "post",
					url: "subscribe.php",
					data: $('#subscribeForm')
						.serialize(),
					dataType: "text",
					success: function(response) {
						$('#result')
							.fadeIn()
							.text(
								response
							);
						setTimeout(function() {
								$('#result')
									.fadeOut(
										'slow'
									);
							},
							3000
						);
					}
				})
			})
		});
	</script>

	<!-- Animation -->

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

</body>

</html>