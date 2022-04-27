<?php
//includes the font
  include '../font.php';
?>


<html>
<head>
    <title> Sing Up Page </title>
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
    //Creates all the error messages for when signing up fails.
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyInput") {
        echo "<p class='error'> You have to fill in all the fields! </p>";
    }else if ($_GET["error"] == "usernametaken") {
        echo "<p class='error'> That username is not available! </p>";
    }else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p class='error'> The passwords dont match! </p>";
    }else if ($_GET["error"] == "invaliduid") {
        echo "<p class='error'> Your name can only contain letters from A-Z and numbers! </p>";
    }else if ($_GET["error"] == "invalidemail") {
        echo "<p class='error'> That email is already in use. </p>";
    }
}

?>

<!-- All the  input fields -->
<form autocomplete="off" action="Includes/SignUp.inc.php" method="post" class="input">

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
