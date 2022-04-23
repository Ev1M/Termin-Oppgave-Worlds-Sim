<?php
//includes the connection to the database.
  include '../dbh.php';
?>

<html>
<head>
    <title> Search Tea  </title>
    <link rel="stylesheet" href="../../css/styles.css" >
</head>
<body class="grid-main">
  <div class="container">
<?php
      //includes the menu.
       include '../menu.php';
        ?>
        <!-- Logo -->
        <div class="Logo">
            <h1> Le Teaser </h1>
        </div>
        
        <div class="Generelt-Forum">
        <?php
            //Reactes when the submit button is pressed (the user presses "Enter")
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                //Searches through the forum table to check for the same title, text or author as searched for.
                $sql = "SELECT * FROM forum WHERE f_title LIKE '%$search%' or f_text LIKE '%$search%' or f_authour LIKE '%$search%'";
                //Makes a result variable and the amount of rows within the result.
                $result = mysqli_query($conn, $sql); 
                $queryResult = mysqli_num_rows($result);
              //Checks the result
              if ($queryResult > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    //Writes out the information found after searching
                    echo "<a href='../lageForum/forum.php?title=".$row['f_title']."&date=".$row['f_date']."'> <div class='Forum-box'>
                    <h3>".$row['f_title']."</h3>
                    <h3>".$row['f_text']."</h3>
                    <h3>".$row['f_date']."</h3>                      
                    <h3>".$row['f_authour']."</h3>
                   </div></a>";
                    }   
                }else {
                  //no result
                    echo "<h2>No results here.</h2>";
                    }
            };
            ?>
        </div>

        <div class="Søkefelt">
        </div>
        <div class="Søkefelt">
          <div class="plassen">
            <!-- The searchbar -->
          <form action="./SearchPage.php" method="POST">
            <input type="search" alt="Søk etter din favoritt te!" id="SearchOfThaTea">
            <button> Search </button>
            </form>
        </div>
      </div>
    </div>  
</body>        