<?php
$host="localhost";
$username="root";
$password="root";
try{
	$conn=new PDO("mysql:host=$host;dbname=Collage",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connect done"; 
}catch(PDOException $err){
	echo "connect failed $err->getMessage()";
}
echo "<br/>";
$result=$conn->query("show tables");
while($row= $result->fetch(PDO:: FETCH_NUM)){
	print_r($row);
}
?>