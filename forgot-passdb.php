<?php

session_start();
include 'dbcon.php';

if (isset($_POST['forgot'])) {
    $email = $_POST['email'];

    $search = "SELECT * FROM registration WHERE email = '$email'";
    $search_query = mysqli_query($con, $search);
    $num = mysqli_num_rows($search_query);
    if ($num > 0) {

        $fetchdata = mysqli_fetch_array($search_query);
        $token = $fetchdata['token'];
        $fullname = $fetchdata['fullname'];

        $subject = "Forgot Passowrd Verification\n";
        $body = "Hello,$fullname \n Please click the following link to reset your password 
            http://localhost/Bank/forgot-activate.php?token=$token";
        $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";
        if (mail($email, $subject, $body, $from)) {
?>
            <script>
                alert('Please check your mail for to reset your password');
                location.replace('index.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Mail not send');
                location.replace('forgot-password.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Email does not exits');
            location.replace('forgot-password.php');
        </script>
<?php
    }
}
?>