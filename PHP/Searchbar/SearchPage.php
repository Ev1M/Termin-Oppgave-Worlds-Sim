<?php
  include '../dbh.php';
?>

<html>
<head>
    <title> Search Tea  </title>
    <link rel="stylesheet" href="../../css/styles.css" >
</head>
<body class="grid-main">
    <div class="container">
        <div class="Meny">
          <a href="../../index.php" >Home</a>
          <a href="PHP/LoginScript/login.php">Login</a>
          <a href="../../HTML/Contact.html">Contact</a>
          <a href="HTML/createForum.html">Post Forum! </a>
        </div>
        
        <div class="Logo">
            <h1> Le Teaser!! </h1>
        </div>
        
        <div class="Generelt-Forum">
        <?php
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM forum WHERE f_title LIKE '%$search%' or f_text LIKE '%$search%' or f_author LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
            
                

                if ($queryResult > 0) { 
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<a href='./forum.php?title=".$row['f_title']."&date=".$row['f_date']."'> <div class='Forum-box'>
                      <h3>".$row['f_title']."</h3>
                      <h3>".$row['f_text']."</h3>
                      <h3>".$row['f_date']."</h3>
                      <h3>".$row['f_authour']."</h3>
                      </div></a>";
                    }   
                }else {
                    echo "<h2>Empty:(</h2>";
                    }
            };
            ?>
        </div>

        <div class="Søkefelt">
            <?php
        echo "There are ".$queryResult." result(s)!";
            ?>
        </div>
        <div class="Søkefelt">
          <div class="plassen">
          <form action="./SearchPage.php" method="POST">
            <input type="search" alt="Søk etter din favoritt te!" id="SearchOfThaTea">
            <button> search </button>
            </form>
        </div>
      </div>
    </div>  
</body>        