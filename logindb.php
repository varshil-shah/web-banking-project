<?php

    session_start();
    error_log(0);
    date_default_timezone_set('Asia/Kolkata');
    include 'dbcon.php';

    if(isset($_POST['login'])) {
        $email = $_POST['loginemail'];
        $password = $_POST['loginpassword'];
        $date = date('d l M') . " " . date("h:i:sA");

        $email_search = "SELECT * FROM registration WHERE email = '$email' and status = 'active'";
        $query = mysqli_query($con,$email_search);
        $emailcount = mysqli_num_rows($query);

        if($emailcount) {
            $emailpassword = mysqli_fetch_assoc($query);
            $_SESSION['fullname'] = $emailpassword['fullname'];
            $_SESSION['email'] = $emailpassword['email'];
            $_SESSION['password'] = $emailpassword['password'];
            $_SESSION['account'] = $emailpassword['account'];
            $_SESSION['senderamount'] = $emailpassword['amount'];
            $_SESSION['pin'] = $emailpassword['pin'];
            $_SESSION['number'] = $emailpassword['number'];
            $_SESSION['token'] = $emailpassword['token'];
            $databasepassword = $emailpassword['password'];
            $passwordverify = password_verify($password,$databasepassword);
            $fullname = $_SESSION['fullname'];

            $subject = "Login\n";
            $body = "Hello,$fullname\n You have login in your account at $date\nThank You";
            $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";

            $activity = "INSERT INTO activity(email,subject,message,time) VALUES('$email','$subject','$body','$date')";
            $activity_query = mysqli_query($con,$activity);

            if($passwordverify && mail($email,$subject,$body,$from) && $activity_query) {
                ?>
                    <script>
                        alert('Login Successful');
                        location.replace('main.php');
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert('Invalid email or password');
                        location.replace('index.php');
                    </script>
                <?php
            }
        }else{
            ?>
                    <script>
                        alert('Email not found');
                        location.replace('index.php');
                    </script>
                <?php
        }
    }
    
?>