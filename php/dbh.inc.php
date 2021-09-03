<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "proiectlogin";

//Conectare la baza de date
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

//Aruncare eroare daca conectarea la baza de date nu a mers
if(!$conn){
    die("Connection Failed:" .mysqli_connect_errno());
}