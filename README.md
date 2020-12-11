# Banking Webisite

## Objective
Sending multiple mails while transaction.

## Use case
You can use this project for getting better understanding of working of online banking websites and also you can use this for your school/college projects.

## Installation
1. You must have your own localhost, in my case I am using xampp server.
2. You have configure your localhost files according to the instructions given below
3. Go to C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:
SMTP = smtp.gmail.com
smtp_port=587
sendmail_from = YourGmailId@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
4. Find [sendmail] by pressing ctrl + f.
Search and pass the following values
smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=YourGmailId@gmail.com
auth_password=Your-Gmail-Password
force_sender=YourGmailId@gmail.com(optional)
5. You can also import sql files in xampp which I have provided in projects.

## Script to test send mail
```php

<?php
        $to_email = "receipient@gmail.com";
        $subject = "Simple Email Test via PHP";
        $body = "Hi, This is test email send by PHP Script";
        $headers = "From: sender email";

        if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
        } else {
        echo "Email sending failed...";
        }

>?

```


## Features

In this project, I have used all the validation.For example - During registration,there shouldn't be duplicate email,passwords are encrypted,mails are sended to both sender and receiver.

## About creator

### Varshil Shah

Feel free to mail me at my email address [varshilshah1004@gmail.com](mailto:varshilshah1004@gmail.com) for any queries.


>Keep smiling,work hard
