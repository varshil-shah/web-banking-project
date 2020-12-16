<?php

session_start();

include 'dbcon.php';

if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $pin = $_POST['pin'];
    $account = $_POST['account'];

    $update = "UPDATE registration SET fullname = '$fullname',number = '$number',pin = '$pin' WHERE account = '$account'";
    $update_query = mysqli_query($con, $update);

    $to = $_SESSION['email'];
    $name = $_SESSION['fullname'];
    $subject = "Profile Update\n";
    $body = "Hello,$name\n Your profile has been updated successfully";
    $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";

    if ($update_query && mail($to, $subject, $body, $from)) {
?>
        <script>
            alert('Data updated sucessfully');
            location.replace('profile.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Not updated');
            location.replace('profile.php');
        </script>
        <?php
    }
}

if (isset($_POST['password'])) {
    $currentpassword = $_POST['currentpassword'];
    $password = $_POST['mypassword'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $database_password = $_SESSION['password'];

    $password_verify = password_verify($currentpassword, $database_password);
    if ($password_verify) {
        if ($password == $cpassword) {
            $hash_pass = password_hash($password, PASSWORD_BCRYPT);
            $password_query = "UPDATE registration SET password = '$hash_pass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $password_query);

            $to = $_SESSION['email'];
            $name = $_SESSION['fullname'];
            $subject = "Password Update\n";
            $body = "Hello,$name\n Your login password has been updated successfully";
            $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";
            if ($run_query && mail($to, $subject, $body, $from)) {
        ?>
                <script>
                    alert("Password updated successfully");
                    window.location.reload();
                    location.replace('profile.php');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Failed to update password");
                    location.replace('profile.php');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Passwords are not matching");
                location.replace('profile.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Please enter valid old password');
            location.replace('profile.php');
        </script>
        <?php
    }
}

?>