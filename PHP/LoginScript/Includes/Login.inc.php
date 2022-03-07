<?php 

if (isset($_POST["submit"])) {

    $username = $_POST["Uid"];
    $pwd = $_POST["Pwd"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSingUp($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $username, $pwd);

}else {
    header("location: ../login.php");
    exit();
}