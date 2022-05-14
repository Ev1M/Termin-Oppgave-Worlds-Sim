<?php

include 'dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesAdmin.css">
    <title>Admins Page</title>
</head>
<body>
<div class="container">
  <div class="Logo"><h1>Le Teaser<h1></div>
  <div class="Meny">
  <a href="../index.php" >Home</a>
  <a href='../LoginScript/profile.php'>Profile</a>
  <a href="../../HTML/Help.html">Help</a>
  <a href="../lageForum/createForum.php">Create Post!</a>
  <a href="./Brukerstøtte/Risikoanalyse.php">ROS</a>
  </div>
  
  <div class="FAQ">
       <form class="skriv" method="post" action="./Brukerstøtte/lagFAQ.php" class="form">
      <input placeholder="Title" type="text" name="Title"><br>
      <textarea  style="resize: none;" placeholder="Text" class="textplass" type="text" name="Text"></textarea><br>
      <input type='submit'>
     </form>
    </div>


  <div class="Contact">
  <?php

if(isset($_POST["c_id"]) && !empty($_POST["c_id"])){
    
  // Prepare a delete statement
  $sql = "DELETE FROM contact WHERE c_id = ?";

  if($stmt = mysqli_prepare($conn, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "i", $param_id);
      
      // Set parameters
      $param_id = trim($_POST["c_id"]);
      
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          // Records deleted successfully.
          header("location: ./admin.php?penis");
          exit();
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }
  }
}


          //Retrives the informasion  
          $SQL = "SELECT * FROM contact ORDER BY c_id DESC";
          $result = mysqli_query($conn, $SQL);
          $queryResult = mysqli_num_rows($result);
          //Checks if there is any information to be written out
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              //writes out the information
              echo "<div class='Help-box'>
              <h3>From: ".$row['c_mail']."</h3>
              <h3>".$row['c_subject']."</h3>
              <h3>".$row['c_message']."</h3>
              <form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post' class='input'>
              <input type='Hidden' name='c_id' value=".$row['c_id']." >
              <input type='submit' value='Delete' class='Delete'>
              </form>
              </div>";
            };
          };
          ?>
  </div>
</div>
</body>
</html>