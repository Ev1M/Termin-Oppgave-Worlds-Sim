
<html>
<head>
    <title> Sing Up Page </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
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

<?php 

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyInput") {
        echo "<p class='error'> You have to fill in every textbox! </p>";
    }else if ($_GET["error"] == "usernametaken") {
        echo "<p class='error'> That username is not available! </p>";
    }
}

?>

<form action="Includes/SignUp.inc.php" method="post" class="input">

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
