<?php 
//Create connection credentials.
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'quizzer';

//Create mysqli object 
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

//Error Handler
if($mysqli->connect_error){
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}