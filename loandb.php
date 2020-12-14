<?php
    include 'dbcon.php';

    if(isset($_POST['loan'])) {
        $type = $_POST['type'];
        $loanamount = $_POST['loanamount'];
        $installments = $_POST['installments'];
        $emi = $_POST['emi'];
        $account = $_POST['account'];
        $aadhar = $_POST['aadhar'];
        $dob = $_POST['dob'];
        $emi_with_interest = calculateEmi((int)$loanamount, (int)$installments);
        $update = "UPDATE registration SET loantype = '$type',loanamount = '$loanamount',installments = '$installments',emi = '$emi_with_interest',aadhar = '$aadhar',dob = '$dob' WHERE account = '$account'";
        $update_query = mysqli_query($con, $update);
        if($update_query) {
            echo "Data inserted";
            //payEmi($account,$con);
        }else{
            echo "Data failed";
        }
    }

    function calculateEmi($p,$n,$r=1) {
            return ($p*$n*$r/100) + $p/$n;
    }

    function payEmi($account,$con) { // TODO add variable from $session
        $select_emi = "SELECT emi,loanamount,amount FROM registration WHERE account = '$account'";
        $select_emi_query = mysqli_query($con,$select_emi);
        $result = mysqli_fetch_assoc($select_emi_query);
        $emi = $result["emi"];
        $loanamount = $result["loanamount"];
        $amount = $result["amount"];
        $emi = (int)($emi);
        $loanamount = (int)($loanamount) - $emi;
        $amount = (int)($amount) - $emi;
        var_dump($loanamount)."<br>";
        var_dump($amount)."<br>";
        $deduct_emi = "UPDATE registration SET loanamount = $loanamount, amount = $amount WHERE account = '$account'";
        $deduct_emi_query = mysqli_query($con, $deduct_emi);
        var_dump($deduct_emi_query);
    } 

?>