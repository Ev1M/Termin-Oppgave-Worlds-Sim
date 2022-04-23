<?php
//includes the connection to the database and the font, for less repetion in code.
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
      <!-- Cannot include the menu beacuse of linking problems. -->
        <div class="Meny">
          <a href="index.php" >Home</a>
          <?php
          //This checks if the sessions username is set, and shows the relevant information according to the answer.
          if (isset($_SESSION["userUid"])) {
            //profile and logout page
            echo "<a href='PHP/LoginScript/profile.php'>Profile</a>";
            echo "<a href='PHP/LoginScript/Includes/logout.inc.php'>Log out</a>";
          } else {
            //login and signup page.
            echo "<a href='PHP/LoginScript/login.php'>Login</a>";
            echo "<a href='PHP/LoginScript/SignUp.php'>Signup</a>";
          }
          ?>
          <a href="PHP/brukerstøtte/Help.php">Help</a>
          <a href="PHP/lageForum/createForum.php">Create Post!</a>
        </div>
        <div class="ForumListe">
          <div class="Lista">
            <!-- Here is the beige list on the rigth of all the forum posts -->
            <ul style="list-style-type:none;">
                <li>Nype-te <br><a href="PHP/lageForum/forum.php?title=Nype%20Te&date=2022-04-05" class="kommentar">Nype-te er favoritt til admin</a> </li>
                <li>GreenTea <br><a class="kommentar">Vet ikke</a></li>
                <li>EarlGreyTea <br><a class="kommentar">Vet ikke</a></li>
                <li>English breakfast <br><a class="kommentar">Vet ikke</a></li>
              </ul>
          </div>
        </div>
        <!-- Logo -->
        <div class="Logo">
            <h1> Le Teaser! </h1>
        </div>
        <div class="Generelt-Forum">
          <?php
          //Retrives the informasion  
          $SQL = "SELECT * FROM forum ORDER BY f_id DESC";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
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
            <!-- The searchbar -->
          <form action="./PHP/Searchbar/SearchPage.php" method="POST">
            <input name="search" type="search" alt="Søk etter din favoritt te!" id="SearchOfThaTea">
            <button class="knapp" name="submit-search"> Search </button>
            </form>   
        </div>
        </div>
</body>

</html>