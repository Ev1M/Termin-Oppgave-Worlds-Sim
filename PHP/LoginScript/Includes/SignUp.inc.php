<?php

if(isset($_POST["submit"])) {

//collects the info sent from the Sign Up submit form
$name = $_POST["name"];
$email = $_POST["E-mail"];
$Uid = $_POST["Uid"];
$Pwd = $_POST["Pwd"];
$PwdRepeat = $_POST["PwdRepeat"];

//includes the database and the functions for the errors
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

//Responds to the error if the input fields are empty
if (emptyInputSingUp($name, $email, $Uid, $Pwd, $PwdRepeat) !== false) {
    header("location: ../SignUp.php?error=emptyInput");
    exit();
}

//Responds to the error if the the username uses characters that the database does not support
if (InvalidUid($Uid) !== false) {
    header("location: ../SignUp.php?error=invaliduid");
    exit();
}

//Responds to the error if the input is not in email format (something@whatever.shoe)
if (InvalidEmail($email) !== false) {
    header("location: ../SignUp.php?error=invalidemail");
    exit();
}

//Responds to the error if the passwords dont match.
if (PwdMatch($Pwd, $PwdRepeat) !== false) {
    header("location: ../SignUp.php?error=passwordsdontmatch");
    exit();
}

//Responds to the error if the username is taken
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