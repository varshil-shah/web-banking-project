<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

include 'dbcon.php';
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $update = "update registration set status='active' where token='$token'";
    $query = mysqli_query($con, $update);

    $email = $_SESSION['email'];
    $fullname = $_SESSION['fullname'];
    $date = date('d l M') . " " . date("h:i:sA");
    $subject = "Registration\n";
    $body = "Hello,$fullname\n You have login in your account at $date\nThank You";
    $from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";
    

    $activity = "INSERT INTO activity(email,subject,message,time) VALUES('$email','$subject','$body','$date')";
    $activity_query = mysqli_query($con, $activity);

    if ($query && $activity_query) {
?>
        <script>
            alert('Accout updated successfully');
            alert('Please login to continue');
            //location.replace('index.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Something went wrong');
        </script>
<?php
    }
}
?>