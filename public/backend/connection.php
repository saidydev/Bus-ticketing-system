<?php 

// VARIABLES 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'bus-ticketing';

// MAKE A CONNECTION

$conn = mysqli_connect($server,$username,$password,$database,);

// TEST

if(!$conn){
    echo 'No connection available';
}
else{
    // echo 'Connection exists';
}
?>