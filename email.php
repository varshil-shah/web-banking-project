<?php
        $to = "jay.salunke@somaiya.edu";
        $subject = "Trial mail send";
        $body = "Message send form localhost";
        $from = "From: jerryshah1004@gmail.com";

        if(mail($to,$subject,$body,$from)) {
                echo "Mail sended successfully";
        }else{
                echo "Mail not send";
        }
?>