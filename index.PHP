<?php
  include './PHP/dbh.php';
  include './PHP/font.php';
?>

<html>
<head>
    <title> Tea  </title>
    <link rel="stylesheet" href="./css/styles.css" >
</head>
<body class="grid-main">
    <div class="container">
        <div class="Meny">
          <a href="index.php" >Home</a>
          <?php
          if (isset($_SESSION["userUid"])) {
            echo "<a href='PHP/LoginScript/profile.php'>Profile</a>";
            echo "<a href='PHP/LoginScript/Includes/logout.inc.php'>Log out</a>";
          } else {
            echo "<a href='PHP/LoginScript/login.php'>Login</a>";
            echo "<a href='PHP/LoginScript/SignUp.php'>Signup</a>";
          }
          ?>
          <a href="HTML/Contact.html">Contact</a>
          <a href="HTML/createForum.html">Post Forum! </a>
        </div>
        <div class="ForumListe">
          <div class="Lista">
            <ul style="list-style-type:none;">
                <li>Nype-te <br><a class="kommentar">Nype-te er favoritt til admin</a> </li>
                <li>GreenTea <br><a class="kommentar">Vet ikke</a></li>
                <li>EarlGreyTea <br><a class="kommentar">Vet ikke</a></li>
                <li>English breakfast <br><a class="kommentar">Vet ikke</a></li>
              </ul>
          </div>
        </div>
        <div class="Logo">
            <h1> Le Teaser! </h1>
        </div>
        <div class="Generelt-Forum">
          <?php
          $SQL = "SELECT * FROM forum";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);

          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<a href='./PHP/lageForum/forum.php?title=".$row['f_title']."&date=".$row['f_date']."'> <div class='Forum-box'>
              <h3>".$row['f_title']."</h3>
              <h3>".$row['f_date']."</h3>
              <h3>".$row['f_authour']."</h3>
              </div></a>";
            };
          };
          ?>

        </div>
        <div class="Søkefelt">
          <div class="plassen">
          <form action="./PHP/Searchbar/SearchPage.php" method="POST">
            <input name="search" type="search" alt="Søk etter din favoritt te!" id="SearchOfThaTea">
            <button class="knapp" name="submit-search"> Search </button>
            </form>   
        </div>
        </div>
    <script src="js/script.js">
    </script>
</body>

</html>