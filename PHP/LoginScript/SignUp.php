
<html>
<head>
    <title> Sing Up Page </title>
    <link rel="stylesheet" href=".../css/stylesSignUpLogIn">
</head>
<div class="signup-form">

<form action="Includes/SignUp.inc.php" method="post">

<input type="text" name="name" placeholder="Full Name...">
<input type="text" name="E-mail" placeholder="E-mail adress...">
<input type="text" name="Uid" placeholder="Username...">
<input type="password" name="Pwd" placeholder="Password...">
<input type="password" name="PwdRepeat" placeholder="Repeat Password...">
<button type="submit" value="Submit" name="submit" > Sign up </button>

</form>

</div>

</html>
<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p> You have to fill in every textbox! </p>";
    }
}

?>