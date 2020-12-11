<?php

include 'dbcon.php';

// if (isset($_POST['subscribe'])) {
    $subscribemail = $_POST['subscribemail'];

    if ($subscribemail == "") {
        echo "Please enter valid email";
    } else {
        $insertQuery = "INSERT INTO subscribe(subscribemail) VALUE('$subscribemail')";
        $query = mysqli_query($con, $insertQuery);

        if ($query) {
            echo "Thank your for subscribing us";
        } else {
            echo "Something went wrong";
        }
    }
//}

