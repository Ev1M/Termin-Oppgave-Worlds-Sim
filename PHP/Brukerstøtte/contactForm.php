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

    $sql = "INSERT INTO contact (c_mail , c_subject, c_message) VALUES ('$mailFrom', '$subject', '$message')";

    

    if ($conn->query($sql) === TRUE) {
        header("Location: ./Contact.php?mailsend");
       
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
};


?>
