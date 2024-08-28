<?php
function sum($a, $b){
	echo $a+$b;
	echo "<br/>";
}

sum(10 , 20);
sum(39, 90);

function userdata($name, $color){
	echo "<h1 style='color:$color'> $name</h1>";
}

userdata("pramita", "green");

 userdata("pramita", "red");


?>