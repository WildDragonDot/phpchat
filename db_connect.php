<?php

$servername="localhost";
$username="root";
$password="";
$database="chatroom";

//connection

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
die("failed to connect".mysqli_connect_error());
}




?>