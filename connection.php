<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="forms";
$conn= new mysqli($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
    echo "Lol Connection failed";
}


?>
