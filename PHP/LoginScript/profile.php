<?php
 include './Includes/dbh.inc.php';
 include '../dbh.php';
 include '../font.php';
?>

<head>
<link rel="stylesheet" href="../../css/stylesProfile.css">
</head>

<body>



<div class="container">

<div class="Head"> 
  <h2> Your Posts </h2>
</div>
<div class="Forum">

<?php
$SQL = "SELECT * FROM forum";
$result = mysqli_query($conn, $SQL);
$queryResult = mysqli_num_rows($result);

if ($queryResult > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['f_authour'] == $_SESSION["userUid"]){
    echo '<a href="../../PHP/lageForum/forum.php?title='.$row["f_title"].'&date='.$row["f_date"].'"> <div class="Forum-box">
    <h3>'.$row["f_title"].'</h3>
    <h3>'.$row["f_date"].'</h3>
    <h3>'.$row["f_authour"].'</h3>
    </div></a>';
    

  }
  }
  };


?>

</div>

  <div class="Logo">
  <h1> Le Teaser! </h1>
</div>

  <div class="Navn">
    <?php
    echo "<h3> Welcome ".$_SESSION["userUid"]."!</h3>"
    ?>
  </div>

<div class="Menu">
<?php
       include '../menu.php';
        ?>
</div>



</div>
</body>