<?php
$host="localhost";
$username="root";
$password="root";

$conn= new PDO("mysql:host=$host;dbname=collage",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "connection done";
?>