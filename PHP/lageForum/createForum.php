<?php
  include '../font.php';
  include '../dbh.php';
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
  <!-- Input fields for creating the post -->
  <div class="Input">
    <form class="skriv" method="post" action="../lageForum/registrert.php" class="form">
      <input placeholder="Title" type="text" name="Title"><br>
      <textarea  style="resize: none;" placeholder="Text" class="textplass" type="text" name="Text"></textarea><br>
      <?php
      //Makes it so that you have to log in to post.
      if (isset($_SESSION["userUid"])) {
            echo "<p>".$_SESSION["userUid"]."</p>";
            echo "<input type='submit'>";
          } else {
            echo "<h3> You have to Login to post! <a href='../PHP/LoginScript/login.php'>(here)</a>";
          };
    ?>
     </form>
  </div>

  <!-- The rules on the  rigth side of the input fields -->
  <div class="Rules">
    <h3>Rules</h3>
    <ul>
      <li>No swear words!</li>
      <li>Anything illegal will be banned!</li>
      <li>Frienldy rivalry only! Hating will be punished!</li>
    </ul>
    <h3>The rules will be withheld by the administrator!</h3>
  </div>
</div>


</body>