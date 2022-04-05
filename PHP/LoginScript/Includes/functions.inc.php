<?php

//Checks if the input fields are empty or not
function emptyInputSingUp($name, $email, $Uid, $Pwd, $PwdRepeat){
    $result;
    if (empty($name) || empty($email) || empty($Uid) || empty($Pwd) || empty($PwdRepeat)){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

//Checks for what characters are being used in the username
function InvalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username )) {
        $result = true;
    } else {
        $result = false;
    }

        
    return $result;
}

//Checks if the email is in the correct format
function InvalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

        
    return $result;
}

//Checks if the passwords match
function PwdMatch($Pwd, $PwdRepeat){
    $result;
    if ($Pwd !== $PwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }

        
    return $result;
}

//Checks if the username or email is already in use.
function uidExsist($conn, $username, $email){
 $sql = "SELECT * FROM users WHERE userUid = ? OR usersEmail = ?;";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../SignUp.php?error=stmtFailed");
    exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $username, $email);
 mysqli_stmt_execute($stmt);

 $resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
}else {
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);

}

//Lager brukeren
function createUser($conn, $name, $email, $Uid, $Pwd, $PwdRepeat){
    $sql = "INSERT INTO users(usersName, usersEmail, userUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../SignUp.php?error=stmtFailed");
       exit();
    }
   
    $hashedPwd = password_hash($Pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $Uid, $hashedPwd);
    mysqli_stmt_execute($stmt);   
    mysqli_stmt_close($stmt);
    header("location: ../SignUp.php?error=none");
    exit();
   
   }
   
   //Checks if the input fields are empty or not
   function emptyInputLogin($Uid, $pwd){
    $result;
    if (empty($Uid) || empty($pwd)){
        $result = true;
    } else {
        $result = false;
    }
    echo "works!";
    return $result;
}

//Logs the user in
function loginUser($conn, $Uid, $pwd) {
    $uidExsist = uidExsist($conn, $Uid, $Uid);

    if ($uidExsist === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }    

    $pwdHashed = $uidExsist["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=passordFeil");
        exit();
    } else if($checkPwd === true) {
        session_start();
        $_SESSION["userId"] = $uidExsist["usersId"];
        $_SESSION["userUid"] = $uidExsist["userUid"];
        header("location: ../../../index.php");

    }
}