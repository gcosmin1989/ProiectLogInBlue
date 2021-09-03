<?php

function emptyInputSignUp($nume, $email, $uid, $pwd, $pwdRepeat){
    $result="";
    if(empty($nume) || empty($email) || empty($uid) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUsername($uid){

    if(!preg_match('/^[a-zA-Z0-9]*$/', $uid)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result="";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))  {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){

    if($pwd !== $pwdRepeat)  {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$uid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
    $result = false;
    return $result;
    }

    
}

function createUser($conn, $nume, $email, $uid, $pwd){
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, UsersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"ssss",$nume, $email, $uid, $hashPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
    
}

function emptyInputlogin($uid, $pwd){
    $result="";
    if(empty($uid) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $uid, $pwd){
     $uidExists=uidExists($conn, $uid, $uid);

     if($uidExists === false) {
         header("location:../login.php?error=wronglogin");
         exit();
     }

     $pwdHashed = $uidExists["usersPwd"];
     $checkPwd = password_verify($pwd, $pwdHashed);

     if($checkPwd === false){
         header("location:../login.php?error=wronglogin");
         exit();
     }elseif($checkPwd === true){
         session_start();
         $_SESSION["usersID"] = $uidExists["usersID"];
         $_SESSION["uid"] = $uidExists["usersUid"];
         header("location: ../index.php");
         exit();

     }
}