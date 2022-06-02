<html>

<head>
  <title> Create Forum </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/stylesHelp.css">
</head>

<body>


  <div class="container">

  <div class="Search">

            <!-- The searchbar -->
          <form autocomplete="off" action="./helpSearchPage.php" method="POST">
            <input name="search" type="search" alt="Søk etter din favoritt te!" class="leBar">
            <button class="knapp" name="submit-search"> Search </button>
            </form>   
  
</div>


    <div class="Artikler">
      <div class="Art1">

        <?php
        include '../dbh.php';

        $SQL = "SELECT * FROM help ORDER BY h_id DESC LIMIT 1";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);
        //Checks if there is any information to be written out
        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //writes out the information
            echo "<a href='./FAQ.php?title=" . $row['h_title'] . "&date=" . $row['h_date'] . "'> <div class='Forum-box'>
              <h3>" . $row['h_title'] . "</h3>
              <h3>" . $row['h_authour'] . "</h3>
              </div></a>";
          };
        }; ?></div>
      <div class="Art2">
        <?php
        $SQL = "SELECT * FROM help ORDER BY h_date ASC LIMIT 1";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);
        //Checks if there is any information to be written out
        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //writes out the information
            echo "<a href='./FAQ.php?title=" . $row['h_title'] . "&date=" . $row['h_date'] . "'> <div class='Forum-box'>
              <h3>" . $row['h_title'] . "</h3>
              <h3>" . $row['h_authour'] . "</h3>
              </div></a>";
          };
        }; ?>
      </div>
      <div class="Art3">
        <?php
        $SQL = "SELECT * FROM help ORDER BY h_title DESC LIMIT 1";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);
        //Checks if there is any information to be written out
        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //writes out the information
            echo "<a href='./FAQ.php?title=" . $row['h_title'] . "&date=" . $row['h_date'] . "'> <div class='Forum-box'>
              <h3>" . $row['h_title'] . "</h3>
              <h3>" . $row['h_authour'] . "</h3>
              </div></a>";
          };
        }; ?>
      </div>
      <div class="Art4">
        <?php
        $SQL = "SELECT * FROM help ORDER BY h_authour ASC LIMIT 1";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);
        //Checks if there is any information to be written out
        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //writes out the information
            echo "<a href='./FAQ.php?title=" . $row['h_title'] . "&date=" . $row['h_date'] . "'> <div class='Forum-box'>
              <h3>" . $row['h_title'] . "</h3>
              <h3>" . $row['h_authour'] . "</h3>
              </div></a>";
          };
        }; ?>
      </div>
    </div>

      <h1 class="Title" > Frequently Asked Questions   </h1>

    <div class="Meny">
      <a href="../../index.php">Home</a>
      <a href="./Contact.php">Contact</a>
      <a href="../PHP/lageForum/createForum.php">Post Forum! </a>
    </div>

    <div class="Logo">
      <h1> Le Teaser! </h1>
    </div>
  </div>

</body>