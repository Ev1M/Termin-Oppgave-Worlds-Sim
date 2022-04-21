<?php
include '../dbh.php';

if (isset($_POST['submit'])) {
    
    if (isset($_SESSION["usersEmail"])) {
        $mailFrom = $_SESSION["usersEmail"];
        $subject = $_POST["Subject"];
        $message = $_POST["Message"];
    }else {
        $mailFrom = $_POST["Email"];
        $subject = $_POST["Subject"];
        $message = $_POST["Message"];
    }

    $mailTo = "evmya002@osloskolen.no";
    $headers = "From: ".$mailFrom;

    mail($mailTo, $subject, $message, $headers);
    header("Location: ./Contact.php?mailsend");
    

};


?>
