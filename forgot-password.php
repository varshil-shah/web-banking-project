<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Forgot Password</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center font-weight-bold py-5 mx-auto text-danger"><span class="text-warning">Forgot</span> Password</h1>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/forgot-password.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="formBx mt-5">
                    <form action="forgot-passdb.php" method="POST">
                        <label for="">Enter your email address </label>
                        <input type="email" name="email" placeholder="Enter your email address" id="">
                        <div class="col-5">
                            <button class="btn btn-primary" type="submit" name="forgot">Send mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
						<h6 class="text-center font-weight-bold text-white">Designed and Created
							by <span class="text-success">Varshil Shah & Nishith Savla</span></h6>
					</div>
				</div>
			</div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>