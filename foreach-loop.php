<?php
$users=["anil","peter","bruce", "tony","sam","bhasker"];

foreach($users as $x){
	if($x==="tony"){
		continue;
	}
	echo $x;
}
foreach($users as $x):
	echo $x;
	echo "<br/>";
endforeach
?>