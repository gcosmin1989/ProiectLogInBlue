<?php

//verificare daca utilizatorul s-a inregistrat corect, daca nu il redirectioneaza la pagina de signup

if(isset($_POST["submit"])){
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //Manipularea Erorilor
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Verificare daca toate datele sunt introduse
    if(emptyInputSignUp($nume, $email, $uid, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
  
    if(invalidUsername($uid) !== false){
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if(strlen($pwd) < 5 ){
        header("location: ../signup.php?error=passwordtosmall");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }
    if(uidExists($conn, $uid, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $nume, $email, $uid, $pwd);
}else{
    header("location: ../signup.php");
    exit();
}

