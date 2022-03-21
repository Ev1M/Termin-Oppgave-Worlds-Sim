<?php 

if (isset($_POST["submit"])) {

    //collects the info sent from the Sign Up submit form
    $Uid = $_POST["Uid"];
    $pwd = $_POST["Pwd"];

    //includes the database and the functions for the errors
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Responds to the error if the input fields are empty
    if (emptyInputLogin($Uid, $pwd) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    //Responds to the error if the input fields are empty    
    }else if ($checkPwd === false) {
        header("location: ../login.php?error=passordFeil");
        exit();
    }
    
    //logs the user in
    loginUser($conn, $Uid, $pwd);
    

}else {
    header("location: ../login.php?error=none");
    exit();
}