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
            <h1> Le Teaser!! </h1>
        </div>
</body>

<div class="Generelt-Forum">
    <?php

      $title =  mysqli_real_escape_string($conn, $_GET['title']);
      $date =  mysqli_real_escape_string($conn, $_GET['date']);

        $SQL = "SELECT * FROM forum WHERE f_title='$title' AND f_date='$date'";
        $result = mysqli_query($conn, $SQL);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='Forum-box'>
              <h3>".$row['f_text']."</h3>
              </div>";
            };
        };
    ?>