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
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>State Bank Of India</title>

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
    <section class="registration">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold py-5"><span class="text-danger">Sign</span><span
                    class="text-warning"> Up</span></h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-12">
                    <div class="formBx">
                        <form action="loandb.php" method="POST">
                            <select name="type" id="type" class="w-100">
                                <optgroup>
                                    <option value="none">-Select your loan type-</option>
                                    <option value="Property">Property</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Vehicle">Vehicle</option>
                                    <option value="Marraige">Marriage</option>
                                </optgroup>]
                            </select>
                            <input type="number" name="loanamount" id="loanamount" placeholder="Enter your loan amount" required
                            class="w-100">
                            
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <select name="installments" id="installments" class="w-100">
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
                                    <input type="text" name="emi" id="emi" readonly class="w-100">
                                </div>
                            </div>

                            <input type="date" name="dob" required class="w-100">
                            
                            <input type="text" name="aadhar" placeholder="Enter your Aadhar Number" required
                                class="w-100">

                            <input type="text" name="account" placeholder="Account number Ex. => A101,A102" required
                                class="w-100">

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
    <script>
        function calculateEmi() {
            document.getElementById("emi").value = document.getElementById("loanamount").value / document.getElementById("installments").Selection
        }
    0</script>
</body>

</html>