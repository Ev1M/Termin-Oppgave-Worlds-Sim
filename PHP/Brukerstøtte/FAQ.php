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
        $SQL = "SELECT * FROM help WHERE h_title='$title'";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);

        //Writes out the information into the post
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='Forum-box'>
              <h1>".$row['h_title']."</h1>
              <h3>".$row['h_text']."</h3>
              <p> Published by: ".$row['h_authour']."</p>";
              "</div>";
              };
        };
    ?>