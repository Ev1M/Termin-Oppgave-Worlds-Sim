<?php
  include '../dbh.php';
  include '../font.php';
?>

<html>
<head>
    <title> Search Tea  </title>
    <link rel="stylesheet" href="../../css/styles.css" >
</head>
<body class="grid-main">
    <div class="container">
       <?php
       include '../menu.php';
        ?>
        <div class="Logo">
            <h1> Le Teaser! </h1>
        </div>
</body>

<div class="Generelt-Forum">
    <?php
      //Retrives the title of the post
      $title =  mysqli_real_escape_string($conn, $_GET['title']);
      $date =  mysqli_real_escape_string($conn, $_GET['date']);

        //Retrives all the data necessery to retrive from the database
        $SQL = "SELECT * FROM forum WHERE f_title='$title' AND f_date='$date'";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);

        //Writes out the information into the post
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='Forum-box'>
              <h1>".$row['f_title']."</h1>
              <h3>".$row['f_text']."</h3>
              <p> Published by: ".$row['f_authour']."</p>";
              //if logged in you can delete the post.
              if (isset($_SESSION["userUid"])) {
              if ($row['f_authour'] == $_SESSION["userUid"]){
                echo "<a class='Delete' href='delete.php?f_id=". $row['f_id'] ."'> Delete </a>";
                }else {
                echo "";
                };
              "</div>";
              };
            };
        };
    ?>