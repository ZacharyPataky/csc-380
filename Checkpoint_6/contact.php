<?php
    // Retrieve data from HTML form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    $recipient = "patakyz@my.canisius.edu";
    $subject = "Resume Website - Contact Form Response";
    $header = "From: {$name} --{$email}--\n";
    //$header = "From: meyer@canisius.edu\n";
    
    echo "$header";

    //mail($recipient, $subject, $msg, $header) or die("There was an error sending the email");
    //mail($recipient, $subject, $msg, $header);
    mail($recipient, $subject, $msg);

    header('Location: https://brahe.canisius.edu/~patakyz/Checkpoint_6/index.html');

    // Old data from the file days
    /*
    $contactFile = fopen("contact_file.txt", "a") or die("Unable to open the file!");
    $retVal = $name . " | " . $email . " | " . $msg . "\n\n";
    echo $retVal;
    fwrite($contactFile, $retVal);
    fclose($contactFile);
    */
?>
