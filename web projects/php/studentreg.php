<?php
$servername='localhost';
$username='';
$password='';
$database='studentreg';

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die(echo 'connection error' .mysqli_connect_error());

}

$sql='CREATE TABLE Students (
    id  INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR
)';


?>