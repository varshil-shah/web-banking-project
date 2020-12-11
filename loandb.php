<?php

    include 'dbcon.php';

    if(isset($_POST['loan'])) {
        var_dump($type = $_POST['type']."<br>");
        var_dump($loanamount = $_POST['loanamount']."<br>");
        var_dump($installments = $_POST['installments']."<br>");
        var_dump($emi = $_POST['emi']."<br>");
        var_dump($account = $_POST['account']."<br>");
        var_dump($aadhar = $_POST['aadhar']."<br>");
        var_dump($dob = $_POST['dob']."<br>");

        // $acc_search_db = "SELECT * FROM registration WHERE account = '$account'";
        // $acc_search_db_query = mysqli_query($con, $acc_search_db);
        // $acc_count = mysqli_num_rows($acc_search_db_query);
        if(true) {
            $insert = "INSERT INTO registration(loantype,loanamount,installments,emi,aadhar,dob) VALUES('$type',$loanamount,$installments,$emi,'$aadhar','$dob') WHERE account='$account'";
            $insert_query = mysqli_query($con, $insert);
            if($insert_query) {
                echo "Data inserted";
            }else{
                echo "Data failed";
            }
        }else{
            echo "You don't have an account";
        }
    }

?>