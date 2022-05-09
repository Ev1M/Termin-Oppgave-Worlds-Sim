<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesAdmin.css">
    <title>Admins Page</title>
</head>
<body>
<div class="container">
  <div class="Logo"><h1>Le Teaser<h1></div>
  <div class="Meny">
  <a href="../../index.php" >Home</a>
  <?php
  //Display Login and Sign Up if not logged in, ekse display Profile and Logout.
          if (isset($_SESSION["userUid"])) {
            echo "<a href='../LoginScript/profile.php'>Profile</a>";
            echo "<a href='../LoginScript/Includes/logout.inc.php'>Log out</a>";
          } else {
            echo "<a href='../LoginScript/login.php'>Login</a>";
            echo "<a href='../LoginScript/SignUp.php'>Signup</a>";
          }
          ?>
  <a href="../../HTML/Help.html">Help</a>
  <a href="../lageForum/createForum.php">Create Post!</a>
  </div>
  <div class="FAQ">
       <form class="skriv" method="post" action="./Brukerstøtte/lagFAQ.php" class="form">
      <input placeholder="Title" type="text" name="Title"><br>
      <textarea  style="resize: none;" placeholder="Text" class="textplass" type="text" name="Text"></textarea><br>
      <input type='submit'>
     </form>
    </div>


  <div class="Contact">

          

  </div>
</div>
</body>
</html>