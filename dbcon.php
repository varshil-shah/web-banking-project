<?php

    $server = "localhost";
    $user = "root";
    $dbpass = "";
    $db = "bankmoney";

    $con = mysqli_connect($server,$user,$dbpass,$db);

    if($con) {
    
    }else{
        ?>
            <script>
                alert('Failed to connect database');
            </script>
        <?php
    }

?>