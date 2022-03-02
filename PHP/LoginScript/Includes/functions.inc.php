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