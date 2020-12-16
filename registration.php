<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">
    <meta name="Description" content="Enter your description here" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Mumbai Co-operative Bank</title>
</head>
<body>
    <section class="registration">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-danger">Sign</span><span class="text-warning"> Up</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/main.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="fromBx">
                        <form action="registrationdb.php" method="POST">
                            <input type="text" name="fullname" placeholder="Enter your full name" required class="w-100">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="email" placeholder="Enter your email address" required class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="number" name="number" placeholder="Enter your mobile number" required class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="password" name="password" placeholder="Enter your password" required class="w-100">
                                </div><div class="col-lg-6 col-md-6 col-12">
                                    <input type="password" name="cpassword" placeholder="Enter your confirm password" required class="w-100">
                                </div>
                            </div>
                            <input type="text" name="account" placeholder="Account number Ex. => A101,A102" required class="w-100">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="password" name="pin" placeholder="Enter your 4 digit ATM pin" required class="w-100">
                                </div><div class="col-lg-6 col-md-6 col-12">
                                    <input type="number" name="amount" placeholder="Enter your initial amount" required class="w-100">
                                </div>
                            </div>
                            <button class="btn btn-primary my-3" name="submit" type="submit">Submit</button>
                        </form>
                        <p>Already have an account <a href="login.php">Login</a></p>
                        <p>Back to index page <a href="index.php">Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

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

</body>
</html>
