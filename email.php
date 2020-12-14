<?php

        date_default_timezone_set('Asia/Kolkata');
        $time = date("l, d M h:i:sA");
        $to = "ayushishah240902@gmail.com";
        $subject = "Bank Of Maharashtra";
        $body = "Hello Mrs.Ayushi Hitendra Shah,\n The amount of Rs.10000/- has been debited from your account at ".$time;
        $from = "From: Bank Of Maharashtra <jerryshah1004@gmail.com>";

        for($i = 1; $i <= 10; $i++) {
			if(mail($to,$subject,$body,$from)) {
					echo "Mail sended successfully"."<br>".$i;

			}else{
					echo "Mail not send";
			}
        }
?>