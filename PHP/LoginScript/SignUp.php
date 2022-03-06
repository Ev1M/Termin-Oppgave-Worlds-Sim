
<html>
<head>
    <title> Sing Up Page </title>
    <link rel="stylesheet" href="../../css/stylesSignUpLogIn.css">
</head>
<body>

<div class="container">
    <div class="Meny">
      <a href="../../index.php" >Home</a>
      <a href="login.php">Login</a>
      <a href="../../HTML/Contact.html">Contact</a>
      <a href="../../HTML/createForum.html">Post Forum! </a>
        </div>



<div class="Login-Form">

<form action="Includes/SignUp.inc.php" method="post">

<input type="text" name="name" placeholder="Full Name..."><br>
<input type="text" name="E-mail" placeholder="E-mail adress..."><br>
<input type="text" name="Uid" placeholder="Username..."><br>
<input type="password" name="Pwd" placeholder="Password..."><br>
<input type="password" name="PwdRepeat" placeholder="Repeat Password..."><br>
<button type="submit" value="Submit" name="submit" > Sign up </button>

</form>

</div>
</div>
</body>
</html>
<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p> You have to fill in every textbox! </p>";
    }
}

?>