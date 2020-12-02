<?php
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password,);

if(!$connect){
    die("Connected Faild".mysqli_connect_error());
}
else{
    echo "Connected succesful";
}

?>