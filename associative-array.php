<?php
 $userdetails =[
	"name"=> "pramita",
	"age"=>29,
	"city"=>"odisha",
	"email" => "abs@test.com",
	"state"=>"UP"
 ];

//  echo $userdetails["name"];
//  echo "<br/>";
//  echo $userdetails["age"];
//  echo "<br/>";
//  echo $userdetails["state"];

foreach($userdetails as $key => $data){
	echo $key ." is " .$data;
	echo "<br>";
 }
?>