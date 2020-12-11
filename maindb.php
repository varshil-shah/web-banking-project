<?php
session_start();
include 'dbcon.php';

$senderDatabaseAmount = (int)$_SESSION['senderamount'];
date_default_timezone_set('Asia/Kolkata');
$time = date("l, d M h:i:sA");
$notProvided = "Not provided";

if (isset($_POST['transaction'])) {
    $formSenderMail = $_POST['sendermail'];
    $formReceiverMail = $_POST['receivermail'];
    $formSenderAccount = $_POST['senderaccount'];
    $formReceiverAcount = $_POST['receiveraccount'];
    $formSenderAmount = $_POST['senderamount'];

    $emailAccountSearch = "SELECT * FROM registration WHERE email = '$formReceiverMail' AND account = '$formReceiverAcount' ";
    $emailAccountSearchQuery = mysqli_query($con, $emailAccountSearch);
    $emailAccountSearchCount = mysqli_num_rows($emailAccountSearchQuery);

    if ($emailAccountSearchCount) {
        $dataSearch = mysqli_fetch_assoc($emailAccountSearchQuery);
        $_SESSION['receiveramount'] = $dataSearch['amount'];    // TODO - remove $_SESSION variable
        $receiverDatabaseAmount = (int)$_SESSION['receiveramount'];
        if ($formSenderAmount > 0) {
            if ($senderDatabaseAmount - $formSenderAmount > 0) {
                $updatedSenderAmount = $senderDatabaseAmount - $formSenderAmount;
                $updatedReceiverAmount = $receiverDatabaseAmount + $formSenderAmount;
                $updateSenderDatabase = "UPDATE registration SET amount = '$updatedSenderAmount' WHERE email = '$formSenderMail' ";
                $updateReceiverDatabase = "UPDATE registration SET amount = '$updatedReceiverAmount' WHERE email = '$formReceiverMail' ";

                $updateReceiverDatabaseQuery = mysqli_query($con, $updateReceiverDatabase);
                $updateSenderDatabaseQuery = mysqli_query($con, $updateSenderDatabase);

                if ($updateReceiverDatabaseQuery && $updateSenderDatabaseQuery) {
?>
                    <script>
                        alert("Money transfer successful.");
                    </script>
                    <?php
                    $subject = "Money Transaction from State bank of India";
                    $body = "The amount of rupees " . $formSenderAmount . " has been deducated from your acccount at " . $time . "\nYour total balance is " . $updatedSenderAmount . " \nThank You";
                    $from = "From: jerryshah1004@gmail.com";

                    $body1 = "The amount of rupees " . $formSenderAmount . " has been added in your acccount at " . $time . "\nYour total balance is " . $updatedReceiverAmount . "  Thank You";
                    $method = "Transaction";

                    $transaction = "Amount of rupees ".$formSenderAmount." has been deducated from ".$formSenderMail. " and added to ".$formReceiverMail." ";
                    $transactionAction = "INSERT INTO transaction(senderemail,receiveremail,method,transaction,date) VALUES('$formSenderMail','$formReceiverMail','$method','$transaction','$time') ";
                    $transactionQuery = mysqli_query($con,$transactionAction);
                    if (mail($formSenderMail, $subject, $body, $from) && mail($formReceiverMail, $subject, $body1, $from) && $transactionQuery) {
                    ?>
                        <script>
                            alert('Please sender and receiver check your inbox');
                            location.replace('index.php');
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('mail not send');
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Failed to transfer money");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert("Sender don't have that much bank balance");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Sender amount input is not valid');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Email or Account are invalid');
        </script>
        <?php
    }
}

if (isset($_POST['atm'])) {
    $atmemail = $_POST['atmemail'];
    $atmaccount = $_POST['atmaccount'];
    $atmamount = $_POST['atmamount'];
    $atmpin = $_POST['atmpin'];

    $pin = "SELECT pin FROM registration WHERE email = '$atmemail' AND pin = '$atmpin' ";
    $pinquery = mysqli_query($con, $pin);
    $pinqueryrow = mysqli_num_rows($pinquery);
    $formAtmAmount = (int)$atmamount;

    if ($pinqueryrow) {
        if ($atmamount > 0) {
            if ($senderDatabaseAmount - $formAtmAmount > 0) {
                //echo $senderDatabaseAmount." ".$formAtmAmount;
                $updatedAtmAmount = $senderDatabaseAmount - $formAtmAmount;
                $updateAtm = "UPDATE registration SET amount = '$updatedAtmAmount' WHERE email = '$atmemail' ";
                $updateAtmQuery = mysqli_query($con, $updateAtm);
                if ($updateAtmQuery) {
        ?>
                    <script>
                        alert('Please collect your amount');
                    </script>
                    <?php
                    $subject = "ATM transaction from State Bank Of India";
                    $body = "Amount of rupees " . $atmamount . " has been deducated from your account on " . $time . "\nYour total amount is " . $updatedAtmAmount . "\nThank you";
                    $from = "From: jerryshah1004@gmail.com";

                    $transaction = "Amount of rupees ".$atmamount." has been deducated from ".$atmemail;
                    $method = "ATM";
                    $transactionAction = "INSERT INTO transaction(senderemail,receiveremail,method,transaction,date) VALUES('$atmemail','$notProvided','$method','$transaction','$time')"; 
                    $transactionQuery = mysqli_query($con,$transactionAction);

                    if (mail($atmemail, $subject, $body, $from) && $transactionQuery) {
                    ?>
                        <script>
                            alert('Please check your email');
                            location.replace('index.php');
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('Email not send');
                        </script>
                <?php
                    }
                }
            } else {
                ?>
                <script>
                    alert("You don't have that much balance in your account");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Please enter the valid amount');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Invalid pin');
        </script>
    <?php
    }
}

if (isset($_POST['deposit'])) {
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $balance = $_POST['balance'];

    $updateDepositAmount = (int)$amount + (int)$senderDatabaseAmount;

    $updateDeposit = "UPDATE registration SET amount = '$updateDepositAmount' WHERE email = '$email' ";
    $updateDepositQuery = mysqli_query($con, $updateDeposit);

    if ($updateDepositQuery) {
    ?>
        <script>
            alert('Amount deposited successful')
        </script>
        <?php
        $subject = "Deposit Amount State Bank of India";
        $body = "Amout of rupees " . $amount . " has been added to your account at " . $time . "\n Your bank balance is " . $senderDatabaseAmount . "\nThank you";
        $from = "From: jerryshah1004@gmail.com";

        $transaction = "Amount of rupees ".$amount." has been added to your account ".$email;
        $method = "Deposit";
        $transactionAction = "INSERT INTO transaction(senderemail,receiveremail,method,transaction,date) VALUES('$email','$notProvided','$method','$transaction','$time')";
        $transactionQuery = mysqli_query($con,$transactionAction);
        if (mail($email, $subject, $body, $from) && $transactionQuery) {
        ?>
            <script>
                alert('Please check your inbox');
                location.replace('index.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('mail not send');
                location.replace('index.php');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('deposit something went wrong');
            location.replace('index.php');
        </script>
<?php
    }
}
?>