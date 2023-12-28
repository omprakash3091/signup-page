<?php

$hostName = 'localhost';
$userName = 'root';
$password = '';
$dataBase = 'signupforms';

$con = mysqli_connect($hostName, $userName, $password, $dataBase);

if(!$con){
    die(mysqli_connect_error($con)); 
}
