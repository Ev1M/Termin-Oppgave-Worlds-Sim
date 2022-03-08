<?php 

if (isset($_POST["submit"])) {

    $Uid = $_POST["Uid"];
    $pwd = $_POST["Pwd"];

    echo "nice";

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($Uid, $pwd) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }else if ($checkPwd === false) {
        header("location: ../login.php?error=passordFeil");
        exit();
    }
    
    loginUser($conn, $Uid, $pwd);
    

}else {
    header("location: ../login.php?error=none");
    exit();
}