<?php

session_start();

include 'dbcon.php';

date_default_timezone_set('Asia/Kolkata');

$date = date('d l M') . " " . date("h:i:sA");
$email = $_SESSION['email'];
$fullname = $_SESSION['fullname'];
$subject = "Logout";
$body = "Hello,$fullname\n You have logout from your account at $date";
$from = "From: Mumbai Co-operative Bank <jerryshah1004@gmail.com>";

$activity = "INSERT INTO activity(email,subject,message,time) VALUES('$email','$subject','$body','$date')";
$activity_query = mysqli_query($con,$activity);

if (mail($email, $subject, $body, $from) && $activity_query) {
	?>
		<script>
			alert('Logout successful');
		</script>
	<?php
} else {
	?>
		<script>
			alert('Error while logout');
		</script>
	<?php
}

session_destroy();
if(isset($_COOKIE[session_name()])):
	setcookie(session_name(), '', time()-7000000, '/');
endif;
?>

<script>
	location.replace('index.php');
</script>

