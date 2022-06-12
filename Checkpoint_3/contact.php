<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    $contactFile = fopen("contact_file.txt", "a") or die("Unable to open the file!");
    $retVal = $name . " | " . $email . " | " . $msg . "\n\n";
    echo $retVal;
    fwrite($contactFile, $retVal);
    fclose($contactFile);
?>
