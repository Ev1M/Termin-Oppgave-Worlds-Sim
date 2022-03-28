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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="Hidden" name="f_id" value="<?php echo trim($_GET["f_id"]); ?>" >
        <p>Are you sure you want to delete your post?</p>
        <p>
            <input type="submit" name="submit">
             <a href="../LoginScript/profile.php">No</a>
         </p>
</form>