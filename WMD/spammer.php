<?php
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $number = $_POST["number"];

    echo "$email";
    echo "$subject";
    echo "$message";
    echo "$number";

    for ($i = 0; $i < $number; $i++) {
        mail($email, $subject, $message);
        sleep(300);
    }
    
    header('Location: https://brahe.canisius.edu/~patakyz/WMD/confirm.html');
?>
