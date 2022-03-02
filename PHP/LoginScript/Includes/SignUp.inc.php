<?php

if(isset($_POST["submit"])) {
    
$name = $_POST["name"];
$email = $_POST["E-mail"];
$Uid = $_POST["Username"];
$Pwd = $_POST["password"];
$PwdRepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSingUp($name, $email, $Uid, $Pwd, $PwdRepeat) !== false) {
    header("location: ../SignUp.php?error=emptyInput");
    exit();
}

if (InvalidUid($Uid) !== false) {
    header("location: ../SignUp.php?error=invaliduid");
    exit();
}

if (InvalidEmail($email) !== false) {
    header("location: ../SignUp.php?error=invalidemail");
    exit();
}

if (PwdMatch($Pwd, $PwdRepeat) !== false) {
    header("location: ../SignUp.php?error=passwordsdontmatch");
    exit();
}

if (uidExsist($conn, $username) !== false) {
    header("location: ../SignUp.php?error=usernametaken");
    exit();
}


}else {
    header("location: ../SignUp.php");
    exit();
}

?>