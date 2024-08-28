<?php
$users=[
	["name"=>"anil","age"=>"29","city"=>"noida"],
	["name"=>"anil","age"=>"29","city"=>"noida"],
	["name"=>"anil","age"=>"29","city"=>"noida"],
	["name"=>"anil","age"=>"29","city"=>"noida"],

];
echo "<table border=1>";
foreach($users as $user){
	echo "<tr>";
	foreach($user as $key=> $item){
			echo "<td>";
			echo "$key is $item";
			echo "</td>";
			// echo "<br/>";
	}
	echo "</tr>";
}
echo "</table>"
?>