<?php

    session_start();
    error_log(0);

    if(!isset($_SESSION['fullname'])) {
        header('location: index.php');
    }

    include 'dbcon.php';

    if(isset($_POST['login'])) {
        $email = $_POST['loginemail'];
        $password = $_POST['loginpassword'];

        $email_search = "SELECT * FROM registration WHERE email = '$email' and status = 'active'";
        $query = mysqli_query($con,$email_search);
        $emailcount = mysqli_num_rows($query);

        if($emailcount) {
            $emailpassword = mysqli_fetch_assoc($query);
            $_SESSION['fullname'] = $emailpassword['fullname'];
            $_SESSION['email'] = $emailpassword['email'];
            $_SESSION['account'] = $emailpassword['account'];
            $_SESSION['senderamount'] = $emailpassword['amount'];
            $databasepassword = $emailpassword['password'];
            $passwordverify = password_verify($password,$databasepassword);

            if($passwordverify) {
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