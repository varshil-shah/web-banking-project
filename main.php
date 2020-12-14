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
    <title>State Bank Of India | Transfer Money</title>
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

    <section class="transaction" id="transaction">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5">Make Transaction</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/security-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="formBx mt-5">
                        <form action="maindb.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input required type="email" readonly value="<?php echo $_SESSION['email']; ?>" name="sendermail" placeholder="Enter sender's email address" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input required type="email" name="receivermail" placeholder="Enter receiver's email address" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input required type="text" readonly value="<?php echo $_SESSION['account']; ?>" name="senderaccount" placeholder="Enter sender's account number" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input required type="text" name="receiveraccount" placeholder="Enter receiver's account number" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input required type="number" name="senderamount" placeholder="Enter sender's amount" class="w-100">
                                </div>
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary my-4" name="transaction" type="submit">Transaction</button>
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

</body>

</html>