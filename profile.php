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
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Profie Setting</title>
</head>

<body class="bg-right">

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

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">

                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>

                <div class="row">
                    <!-- left side navbar -->
                    <div class="col-lg-3 col-md-4 d-md-block">
                        <div class="card bg-common card-left bg-primary">
                            <div class="card-body">
                                <ul class="nav d-md-block d-none">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" data-toggle="tab" href="#profile"><i class="fa fa-user mr-1"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link text-white" href="#account"><i class="fa fa-user-cog mr-1"></i> Transactions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" data-toggle="tab" href="#security"><i class="fa fa-user-shield mr-1"></i> Update password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" data-toggle="tab" href="#activity"><i class="fa fa-street-view mr-1"></i> Activity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right side  -->
                    <div class="col-lg-8 col-md-9">
                        <div class="card">
                            <div class="card-header border-bottom mb-3 d-md-none">
                                <ul class="nav nav-tabs card-header-tabs nav-fill">
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link active" href="#profile"><i class="fa fa-user mr-1"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#account"><i class="fa fa-user-cog mr-1"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#security"><i class="fa fa-user-shield mr-1"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#activity"><i class="fa fa-street-view mr-1"></i></i></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- actual data which is live start -->

                            <div class="card-body tab-content border-0">
                                <!-- actual profile data -->

                                <div class="tab-pane active" id="profile">
                                    <h6>YOUR PROFILE INFORMATION</h6>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="formBx">
                                                <form action="profiledb.php" method="POST">
                                                    <label for="">Fullname</label>
                                                    <input type="text" value="<?php echo $_SESSION['fullname']; ?>" name="fullname" placeholder="Fullname">
                                                    <label for="">Phone number</label>
                                                    <input type="number" value="<?php echo $_SESSION['number']; ?>" name="number" placeholder="Phone Number" id="">
                                                    <label for="">Account number</label>
                                                    <input type="text" readonly name="account" value="<?php echo $_SESSION['account']; ?>" placeholder="Account number">
                                                    <label for="">Balance</label>
                                                    <input type="number" readonly name="balance" value="<?php echo $_SESSION['senderamount']; ?>">
                                                    <label for="">ATM pin</label>
                                                    <input type="number" name="pin" value="<?php echo $_SESSION['pin']; ?>" placeholder="Atm pin number" id="">
                                                    <div class="col-1">
                                                        <button class="btn btn-primary" type="submit" name="update">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="account">
                                    <h6>YOUR TRANSACTIONS</h6>
                                    <hr>

                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Receiver email</th>
                                                <th scope="col">Method</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Date and Time</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Display transaction -->
                                            <?php

                                            include 'dbcon.php';

                                            $email = $_SESSION['email'];
                                            $count = 0;
                                            $select = "select * from transaction where senderemail = '$email'";
                                            $select_query = mysqli_query($con, $select);
                                            $nums = mysqli_num_rows($select_query);

                                            while ($res = mysqli_fetch_array($select_query)) {
                                                $count++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $res['receiveremail']; ?></td>
                                                    <td><?php echo $res['method']; ?></td>
                                                    <td><?php echo $res['transaction']; ?></td>
                                                    <td><?php echo $res['date']; ?></td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="security">
                                    <h6>Update password</h6>
                                    <hr>

                                    <div class="row">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="formBx">
                                                    <form action="profiledb.php" method="POST">
                                                        <label for="">Email address</label>
                                                        <input type="email" readonly value="<?php echo $_SESSION['email']; ?>" name="email" id="">
                                                        <label for="">Current Password</label>
                                                        <input type="password" name="currentpassword" placeholder="Current password" id="">
                                                        <label for="">Enter your new password</label>
                                                        <input type="password" name="mypassword" placeholder="New password" id="">
                                                        <label for="">Confirm your password</label>
                                                        <input type="password" placeholder="Confirm new password" name="cpassword">
                                                        <div class="col-1">
                                                            <button type="submit" name="password" class="btn btn-primary">update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="activity">
                                    <h6>Your all activities</h6>
                                    <hr>

                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Date and Time</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Display transaction -->
                                            <?php

                                            include 'dbcon.php';

                                            $email = $_SESSION['email'];
                                            $count = 0;
                                            $select = "select * from activity where email = '$email'";
                                            $select_query = mysqli_query($con, $select);
                                            $nums = mysqli_num_rows($select_query);

                                            while ($res = mysqli_fetch_array($select_query)) {
                                                $count++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $res['subject']; ?></td>
                                                    <td><?php echo $res['message']; ?></td>
                                                    <td><?php echo $res['time']; ?></td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>