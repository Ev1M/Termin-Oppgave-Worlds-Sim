<?php
 include './Includes/dbh.inc.php';
 include '../dbh.php';
 include '../font.php';
?>

<head>
<link rel="stylesheet" href="../../css/stylesSignUpLogIn.css">
</head>

<body>



<div class="container">

<div class="Head"> 
  <h2> Your Posts </h2>
</div>


  <div class="Logo">
  <h1> Le Teaser! </h1>
</div>

  <div class="Navn">
    <?php
    echo "<h3> Welcome ".$_SESSION["userUid"]."!</h3>"
    ?>
  </div>
  
  <div class="Forum"></div>
<?php
       include '../menu.php';
        ?>


</div>
</body>