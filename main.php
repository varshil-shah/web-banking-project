<?php

    session_start();
    if(!isset($_SESSION['fullname'])) {
        header('location: index.php');
    }
    
    include 'links.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <title>State Bank Of India</title>
</head>

<body>

<section id="home">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><?php echo "Welcome ". $_SESSION['fullname']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#transaction">Transaction <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#atm">ATM</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#deposit">Deposit</a>
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
                <h2 class="text-center font-weight-bold py-5">Add Transaction</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/login.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="formBx">
                            <form action="maindb.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input required type="email" readonly value="<?php echo $_SESSION['email']; ?>" name="sendermail" placeholder="Enter sender's email address" class="w-100">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input required type="email"  name="receivermail" placeholder="Enter receiver's email address" class="w-100">
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

    <section class="atm" id="atm">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-success">ATM</span><span class="text-warning"> Services</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-12">
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
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
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

</body>
</html>