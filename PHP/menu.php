<!-- This file is only used on specific pages beacuse of the intricate directory system  -->


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
  <a href="../Brukerstøtte/Help.PHP">Help</a>
  <a href="../lageForum/createForum.php">Create Post! </a>
  </div>