<html>
<head>
    <title> Create Forum </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/stylesHelp.css" >
</head>
<body>
  

  <div class="container">
    <div class="Artikler">
      <div class="Art1"> 
        <?php 
        include '../dbh.php';
     
          $SQL = "SELECT * FROM help LIMIT 1 h_id";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
              echo "<a href='./PHP/lageForum/forum.php?title=".$row['h_title']."&date=".$row['h_date']."'> <div class='Forum-box'>
              <h3>".$row['h_title']."</h3>
              <h3>".$row['h_date']."</h3>
              <h3>".$row['h_authour']."</h3>
              </div></a>";
            };
          };?></div>
      <div class="Art2">
      <?php 
          $SQL = "SELECT * FROM help LIMIT 1 h_date";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
              echo "<a href='./PHP/lageForum/forum.php?title=".$row['h_title']."&date=".$row['h_date']."'> <div class='Forum-box'>
              <h3>".$row['h_title']."</h3>
              <h3>".$row['h_date']."</h3>
              <h3>".$row['h_authour']."</h3>
              </div></a>";
            };
          };?>
      </div>
      <div class="Art3">
      <?php 
          $SQL = "SELECT * FROM help LIMIT 1 ORDER BY h_title";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
              echo "<a href='./PHP/lageForum/forum.php?title=".$row['h_title']."&date=".$row['h_date']."'> <div class='Forum-box'>
              <h3>".$row['h_title']."</h3>
              <h3>".$row['h_date']."</h3>
              <h3>".$row['h_authour']."</h3>
              </div></a>";
            };
          };?>
      </div>
      <div class="Art4">
      <?php 
          $SQL = "SELECT * FROM help LIMIT 1 ORDER BY h_authour";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
              echo "<a href='./PHP/lageForum/forum.php?title=".$row['h_title']."&date=".$row['h_date']."'> <div class='Forum-box'>
              <h3>".$row['h_title']."</h3>
              <h3>".$row['h_date']."</h3>
              <h3>".$row['h_authour']."</h3>
              </div></a>";
            };
          };?>
      </div>
    </div>
    <div class="Title"> <h1>You Stupid! Naw a Nawt. Whats 9+10? 21! </h1></div>
    <div class="Footer"></div>
 

  <div class="Meny">
  <a href="../index.php" >Home</a>
  <a href="./Contact.php">Contact</a>
  <a href="../PHP/lageForum/createForum.php">Post Forum! </a>
  </div>

  <div class="Logo">
    <h1> Le Teaser! </h1>
    </div>
  </div>
    
  </body>