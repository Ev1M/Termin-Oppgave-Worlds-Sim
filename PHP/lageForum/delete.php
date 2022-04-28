

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesSignUpLogIn.css">
    <title>Delete</title>
</head>
<body>
<div class="container">

<?php
//includes the menu
       include '../menu.php';
        ?>

<?php

//includes the database and font
include '../font.php';
include '../dbh.php';



if(isset($_POST["f_id"]) && !empty($_POST["f_id"])){
    
    // Prepare a delete statement
    $sql = "DELETE FROM forum WHERE f_id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["f_id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to profile
            header("location: ../LoginScript/profile.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

?>



<!-- Asks one last time wether you want to delete the post or not -->
<div class="Login-Form">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input">
        <input type="Hidden" name="f_id" value="<?php echo trim($_GET["f_id"]); ?>" >
        <p>Are you sure you want to delete your post?</p>
        <p>
            <input type="submit" value="Yes">
            <a href="../LoginScript/profile.php">No</a>
         </p>
</form>
</div>
</div>
</body>
</html>
