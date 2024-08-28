<?php
$user_need=5;
for($i=0;$i<=10;$i++){
	// echo $i;
	// echo "<br>";
	// if($i==$user_need){
	// 	break;
	// }
}

for($i=0;$i<=10;$i++){
	if($i==3 || $i==7){
		continue; //without loop continue will print nothing
	}
	echo $i;
	echo "<br>";

}
?>