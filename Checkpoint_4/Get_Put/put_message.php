<?php
    $message = $_POST["message"];
    $file = "file_message.txt";
    file_put_contents($file, $message);
    echo $message;
?>
