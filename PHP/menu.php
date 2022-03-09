
<div class="Meny">
  <a href="../../index.php" >Home</a>
  <?php
          if (isset($_SESSION["userUid"])) {
            echo "<a href='../LoginScript/profile.php'>Profile</a>";
            echo "<a href='../LoginScript/Includes/logout.inc.php'>Log out</a>";
          } else {
            echo "<a href='../PHP/LoginScript/login.php'>Login</a>";
            echo "<a href='../PHP/LoginScript/SignUp.php'>Signup</a>";
          }
          ?>
  <a href="../../HTML/Contact.html">Contact</a>
  <a href="../lageForum/createForum.php">Post Forum! </a>
  </div>