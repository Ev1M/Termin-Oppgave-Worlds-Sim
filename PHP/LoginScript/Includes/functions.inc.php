<?php
function emptyInputSingUp($name, $email, $Uid, $Pwd, $PwdRepeat){
    $result;
    if (empty($name) || empty($email) || empty($Uid) || empty($Pwd) || empty($PwdRepeat)){
        $result = true;
    } else {
        $result = false;
    }


    return $result;
}

function InvalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"), trim($_POST["username"]) ) {
        $result = true;
    } else {
        $result = false;
    }

        
    return $result;
}