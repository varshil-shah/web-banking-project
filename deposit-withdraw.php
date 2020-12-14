<?php

session_start();
if (!isset($_SESSION['fullname'])) {
    header('location: index.php');
}

include 'links.html';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>State Bank Of India | Deposit and Withdraw</title>
</head>
<body>

    <!-- Navbar -->

    <section id="home">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><?php echo "Welcome " . $_SESSION['fullname']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="main.php">Transfer<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="deposit-withdraw.php">Deposit/Withdraw</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="loan.php">Loan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>


    <section class="atm" id="atm">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-success">Withdraw</span><span class="text-warning"> Services</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/security.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 mx-auto">
                    <div class="formBx">
                        <form action="maindb.php" method="POST">
                            <input required type="email" readonly value="<?php echo $_SESSION['email']; ?>" name="atmemail" placeholder="Enter your email " class="w-100">
                            <input required type="text" readonly value="<?php echo $_SESSION['account'];  ?>" name="atmaccount" id="" placeholder="Enter your account number" class="w-100">
                            <input required type="number" name="atmamount" placeholder="Enter your amount" id="">
                            <input required type="password" name="atmpin" placeholder="Enter your atm pin number" class="w-100">
                            <div class="col-1">
                                <button type="submit" name="atm" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="deposit">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-success">Deposit</span><span class="text-warning"> Amount</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/main.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 mx-auto">
                    <div class="fromBx">
                        <form action="maindb.php" method="POST">
                            <h5>Your account balance</h3>
                                <input required readonly name="balance" type="number" class="w-100" value="<?php echo $_SESSION['senderamount']; ?>">
                                <input required type="email" readonly value="<?php echo $_SESSION['email']; ?>" name="email" id="" class="w-100">
                                <input required type="number" name="amount" class="w-100" placeholder="Enter the amount">
                                <div class="col-1">
                                    <button class="btn btn-primary" name="deposit">Deposit</button>
                                </div>
                        </form>
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
							by <span class="text-success">Varshil Shah</span></h5>
					</div>
				</div>
			</div>
    </section>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>