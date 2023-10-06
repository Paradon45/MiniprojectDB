<?php
 $servername = "Localhost";
 $username = "root";
 $password = "";
 $dbname = "register_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed" . mysqli_connect_error());
} 
?>