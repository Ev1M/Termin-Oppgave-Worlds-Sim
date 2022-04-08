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
    <form action="contactForm.php" method="POST">
        <?php
         if (isset($_SESSION["usersEmail"])) {
            //profile and logout page
            echo "<p>Email som vil bli brukt er ".$_SESSION["usersEmail"]."</p>";
            echo "<input type='text' name='Subject' placeholder='Subject'>";
            echo "<textarea type='text' name='Message' placeholder='Message'></textarea>";
            echo "<button type='submit' name='Submit'> Send Mail </button>";
          } else {
            echo "<input type='text' name='Email' placeholder='Email...'>";
            echo "<input type='text' name='Subject' placeholder='Subject'>";
            echo "<textarea type='text' name='Message' placeholder='Message...'></textarea>";
            echo "<button type='submit' name='Submit'> Send Mail </button>";
          }
        ?>
    </form>
</body>
</html>
<?php
    include '../menu.php';
    ?>