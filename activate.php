<?php
    session_start();

    include 'dbcon.php';
    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $update = "update registration set status='active' where token='$token'";
        $query = mysqli_query($con,$update);
        if($query){
            ?>
                <script>
                    alert('Accout updated successfully');
                    alert('Please login to continue');
                    location.replace('index.php')
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert('Something went wrong');
                </script>
            <?php
        }
    }
?>