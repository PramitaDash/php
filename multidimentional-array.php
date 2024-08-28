<?php
$user =[
	 [1,"anil","noida","anil@email.com"],
	 [2,"sam","noida","sam@email.com"],
	 [3,"peter","noida","peter@email.com"]
];

// echo "<pre>";
// print_r $user;
// echo "<pre>";

for($i=0;$i<count($user);$i++){
	// print_r ($user[$i]);
	for($j=0;$j<count($user[$i]);$j++){
		echo $user[$i][$j];
		echo "<br>";
	}
}
?>