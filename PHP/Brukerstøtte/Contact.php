<?php

include '../font.php';
include '../dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesHelp.css" >
    <title>Contact</title>
</head>
<body>
  <div class="container">
  <?php
    include '../menu.php';
    ?>

    <div class="Title"><h1>Send in a ticket</h1></div>

    <div class="Search">
    <form action="contactForm.php" method="POST">
        <?php
         if (isset($_SESSION["usersEmail"])) {
            //profile and logout page
            echo "<p>The E-mail that will be used is ".$_SESSION["usersEmail"]."</p>";
            echo "<input type='text' name='Subject' placeholder='Subject'><br>";
            echo "<textarea width='150px' height='150px' type='text' name='Message' placeholder='Message'></textarea><br>";
            echo "<button type='submit' name='Submit'> Send Mail </button>";
          } else {
            echo "<input type='text' name='Email' placeholder='Email...'><br>";
            echo "<input type='text' name='Subject' placeholder='Subject'><br>";
            echo "<textarea type='text' name='Message' placeholder='Message...'></textarea><br>";
            echo "<button type='submit' name='Submit'> Send Mail </button>";
          }
        ?>
    </form>

        </div>
</body>
</html>