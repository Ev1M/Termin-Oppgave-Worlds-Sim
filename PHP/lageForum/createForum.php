<?php
  include '../font.php';
  include '../LoginScript/Includes/dbh.inc.php';
  session_start();
?>

<html>
<head>
    <title> Create Forum </title>
    <link type="text/css" rel="stylesheet" href="../../css/stylesForum.css" />
</head>
<body>
  

<div class="container">
<?php
       include '../menu.php';
        ?>

  <div class="Title"> <h1> Create Your own Post!</h1> </div>

  <div class="Logo">
  <h1> Le Teaser! </h1>
  </div>

  <div class="Input">
    <form class="skriv" method="post" action="../PHP/lageForum/registrert.php" class="form">
      <input placeholder="Title" type="text" name="Title"><br>
      <textarea  style="resize: none;" placeholder="Text" class="textplass" type="text" name="Text"></textarea><br>
      <?php
      if (isset($_SESSION["userUid"])) {
            echo "<p>".$_SESSION["userUid"]."</p>";
            echo "<input type='submit'>";
          } else {
            echo "<h3> You have to Login to post! <a href='../PHP/LoginScript/login.php'>(here)</a>";
          };
    ?>
     </form>
  </div>

  <div class="Rules">
    <h3>Rules</h3>
    <ul>
      <li>No swear words!</li>
      <li>Anything illegal will be banned!</li>
      <li>Frienldy rivalry only! Hating will be punished!</li>
    </ul>
  </div>
</div>


</body>