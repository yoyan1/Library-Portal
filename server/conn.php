<?php
$server = 'localhost';
$username = 'root';
$psw = '';
$dbName = 'cpsu';

$conn = mysqli_connect($server, $username, $psw, $dbName);

if(mysqli_connect_errno()){
    echo "connection failed";
} else{

}
