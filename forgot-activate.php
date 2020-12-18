<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Kolkata');
include 'dbcon.php';

if (isset($_POST['pass'])) {

    if (isset($_GET['token'])) {

        $token = $_GET['token'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        $date = date('d l M') . " " . date("h:i:sA");

        $hash_pass = password_hash($pass, PASSWORD_BCRYPT);

        if ($pass === $cpass) {
            $update = "UPDATE registration SET password = '$hash_pass' WHERE token = '$token'";
            $update_query = mysqli_query($con, $update);

            $email = "SELECT * FROM registration WHERE token = '$token'";
            $email_query = mysqli_query($con, $email);

            if ($email_query) {

                $database = mysqli_fetch_array($email_query);

                $fullname = $database['fullname'];
                $email = $database['email'];
                $subject = "Password Reset\n";
                $message = "Hello,$fullname\nYou login password has been successfully reset\nThank You";
                $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";

                $activity = "INSERT INTO activity(email,subject,message,time) VALUES('$email','$subject','$message','$date')";
                $activity_query = mysqli_query($con,$activity);

                if($update_query && $activity_query && mail($email,$subject,$message,$from)) {
                    ?>
                        <script>
                            alert('Password updated successfully');
                            location.replace('login.php');
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert('Something went wrong');
                            location.replace('forgot-activate.php');
                        </script>
                    <?php
                }
            }
        } else {
?>
            <script>
                alert('Password are not matching');
                location.replace('forgot-activate.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('No token found');
        </script>
<?php
    }
}
?>

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
                    <form action="" method="POST">
                        <label for="">Enter your password </label>
                        <input type="password" name="password" placeholder="Enter your password" id="">
                        <label for="">Confirm your password </label>
                        <input type="password" name="cpassword" placeholder="Confirm your password" id="">
                        <div class="col-5">
                            <button class="btn btn-primary" type="submit" name="pass">Submit</button>
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