<?php
  include '../font.php';
?>

<head>
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

<form action="Includes/Login.inc.php" method="post">

<input type="text" name="Uid" placeholder="Username/E-mail..."><br>
<input type="password" name="Pwd" placeholder="Password..."><br>
<button type="submit" name="button"> Login </button>
</div>
</div>

</form>

</body>