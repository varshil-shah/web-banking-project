<?php
include 'dbcon.php';

session_start();

if (isset($_POST['loan'])) {
    $type = $_POST['type'];
    $loanamount = $_POST['loanamount'];
    $installments = $_POST['installments'];
    $emi = $_POST['emi'];
    $account = $_POST['account'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];
    $emi_with_interest = calculateEmi((int)$loanamount, (int)$installments);
    $database_amount = (int)$_SESSION['senderamount'];
    $email = $_SESSION['email'];

    $search_account = "SELECT * FROM registration WHERE account = '$account' && email = '$email'";
    $search = mysqli_query($con, $search_account);
    $nums = mysqli_num_rows($search);

    if ($nums > 0) {
        $update = "UPDATE registration SET loantype = '$type',loanamount = '$loanamount',installments = '$installments',emi = '$emi_with_interest',aadhar = '$aadhar',dob = '$dob' WHERE account = '$account'";
        $update_query = mysqli_query($con, $update);

        $updated_amount = $database_amount - $emi;
        $updated_loan = $loanamount - $emi;

        $run = "UPDATE registration SET amount = '$updated_amount',loanamount = '$updated_loan' WHERE email = '$email'";
        $run_query = mysqli_query($con, $run);
        if ($update_query && $run_query) {
?>
            <script>
                alert('loan approved successfully');
                location.replace('main.php');
            </script>
        <?php
            //payEmi($account,$con);
        } else {
        ?>
            <script>
                alert('Failed to approved loan');
                location.replace('loan.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Account not found');
        </script>
<?php
    }
}

function calculateEmi($p, $n, $r = 1)
{
    return ($p * $n * $r / 100) + $p / $n;
}

?>

<!-- function payEmi($account,$con) { // TODO add variable from $session
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
    }  -->