<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container-fluid">
        <h2 class="text-center font-weight-bold py-5">Login Page</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/signup.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="formBx">
                    <form action="logindb.php" method="POST">
                        <div class="row py-5">
                            <div class="col-lg-12 col-12">
                                <input required type="email" name="loginemail" placeholder="Enter your email address" class="w-100" id="">
                            </div>
                            <div class="col-lg-12 col-12">
                                <input required type="password" name="loginpassword" placeholder="Enter your password" class="w-100">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary" name="login" type="submit">Login</button>
                            </div>
                        </div>
                        <p class="">Already have an account <a href="registration.php">signup</a></p>
                        <p>Back to index page <a href="index.php">Home</a></p>
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
                        <h5 class="text-center font-weight-bold text-white">Designed and Created
                            by <span class="text-success">Varshil Shah</span></h5>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
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

</body>

</html>