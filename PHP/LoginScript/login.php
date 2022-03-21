<?php
//includes the font
  include '../font.php';
?>

<head>
<link rel="stylesheet" href="../../css/stylesSignUpLogIn.css">
</head>

<body>

<div class="container">
<?php
//includes the menu
       include '../menu.php';
        ?>


        
<div class="Login-Form">
<?php
//Creates all the error messages for when loging in fails.
if (isset($_GET["error"])) {
    if ($_GET["error"] == "wrongLogin") {
        echo "<p class='error'> Not working! </p>";
    }else if ($_GET["error"] == "passordFeil") {
      echo "<p class='error'> Wrong password! </p>";
    }
}
?>


<!-- All the  input fields -->
<form action="Includes/Login.inc.php" method="post" class="input">

<input type="text" name="Uid" placeholder="Username/E-mail..."><br>
<input type="password" name="Pwd" placeholder="Password..."><br>
<button type="submit" name="submit"> Login </button>
</div>
</div>

</form>

</body>