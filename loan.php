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
    <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">
    <meta name="Description" content="Enter your description here" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Loan Application</title>

    <style>
        select,
        option {
            margin-bottom: 20px;
            padding: 12px;
            font-size: 16px;
            background: transparent;
            outline: none;
            border: 2px solid #000;
            background: #fff;
            color: #000;
            resize: none;
        }
    </style>
</head>

<body>

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

    <section class="registration">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-danger">LO</span><span class="text-warning">AN</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-12">
                    <div class="formBx">
                        <form action="loandb.php" method="POST">
                            <select required name="type" id="type" class="w-100">
                                <optgroup>
                                    <option value="none">-Select your loan type-</option>
                                    <option value="Property">Property</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Vehicle">Vehicle</option>
                                    <option value="Marraige">Marriage</option>
                                </optgroup>
                            </select>
                            <input required type="number" onchange="calculateEmi()" name="loanamount" id="loanamount" placeholder="Enter your loan amount" required class="w-100">

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <select required name="installments" onchange="calculateEmi()" id="installments" class="w-100">
                                        <optgroup>
                                            <option value="none">-Select Number of Installments-</option>
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input required type="text" name="emi" id="emi" value="0" readonly class="w-100">
                                </div>
                            </div>

                            <input required type="date" name="dob" required class="w-100">

                            <input required type="text" name="aadhar" placeholder="Enter your Aadhar Number" required class="w-100">

                            <input required type="text" name="account" placeholder="Account number Ex. => A101,A102" required class="w-100">

                            <div class="col-1">
                                <button class="btn btn-primary my-3" name="loan" type="submit">Submit</button>
                            </div>
                        </form>
                        <p>Already have an account <a href="index.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script>
        function calculateEmi() {
            const principal = document.getElementById("loanamount").value;
            const period = document.getElementById("installments").value;
            const emi = (principal * period * 1 / 100) + principal / period;
            document.getElementById("emi").value = !isNaN(emi) ? emi : 0 // todo
        }
    </script>
</body>

</html>