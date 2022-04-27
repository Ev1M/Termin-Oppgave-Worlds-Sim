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
                $sql = "SELECT * FROM help WHERE h_title LIKE '%$search%' or h_text LIKE '%$search%'";
                //Makes a result variable and the amount of rows within the result.
                $result = mysqli_query($conn, $sql); 
                $queryResult = mysqli_num_rows($result);
              //Checks the result
              if ($queryResult > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    //Writes out the information found after searching
                    echo "<a href='./FAQ.php?title=" . $row['h_title'] . "&date=" . $row['h_date'] . "'> <div class='Forum-box'>
                    <h3>" . $row['h_title'] . "</h3>
                    <h3>" . $row['h_date'] . "</h3>
                    </div></a>";
                    }   
                }else {
                  //no result
                    echo "<h2>No results here.</h2>";
                    }
            };
            ?>
        </div>
        </div>
      
    </div>  
</body> 