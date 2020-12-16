<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

session_start();

include 'dbcon.php';

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $account = $_POST['account'];
    $pin = $_POST['pin'];
    $amount = $_POST['amount'];
    $date = date('d l M') . " " . date("h:i:sA");

    $hashpass = password_hash($password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $email_search_db = "SELECT * FROM registration WHERE email = '$email' || account = '$account'";
    $email_search_db_query = mysqli_query($con, $email_search_db);
    $email_count = mysqli_num_rows($email_search_db_query);

    if ($email_count > 0) {
?>
        <script>
            alert('Email already exists or account already exists');
        </script>
        <?php
    } else {
        if ($password === $cpassword) {
            $insert = "INSERT INTO registration(fullname,email,number,password,account,pin,amount,dateandtime,status,token) 
                        VALUES('$fullname','$email','$number','$hashpass','$account','$pin','$amount','$date','inactive','$token')";
            $insert_query = mysqli_query($con, $insert);

            if ($insert_query) {
                $subject = "Email activation for Mumbai Co-operative Bank";
                $body = "Hi $fullname, please click the below link to activate your account.
                        http://localhost/Bank/activate.php?token=$token";
                $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";

                $_SESSION['fullname'] = $fullname;
                $_SESSION['email'] = $email;

                if (mail($email, $subject, $body, $from)) {
        ?>
                    <script>
                        alert('Please click the link provided to your mail address to verify your account');
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert('Email not send');
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert('Something went wrong');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Passwords are not matching');
            </script>
<?php
        }
    }
}

?>