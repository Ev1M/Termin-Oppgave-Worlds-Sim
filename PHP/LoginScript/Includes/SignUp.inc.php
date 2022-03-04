<?php

if(isset($_POST["submit"])) {
    
$name = $_POST["name"];
$email = $_POST["E-mail"];
$Uid = $_POST["Uid"];
$Pwd = $_POST["Pwd"];
$PwdRepeat = $_POST["PwdRepeat"];

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

if (uidExsist($conn, $username, $email) !== false) {
    header("location: ../SignUp.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $Uid, $Pwd, $PwdRepeat);

}else {
    header("location: ../SignUp.php");
    exit();
}

?>