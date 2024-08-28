<?php
// $x=20;
// echo "before condition <br>";

// if($x==20){
// 	goto jump;
// }
// $name="Pramita";
// echo $name;

// //


// jump:
// echo "statement is jumped on line nu. 15";

for($i=0;$i<10;$i++){
	echo "$i <br>";

	if($i==5){
		goto outsideloop;
	}
}

outsideloop:
echo "loop is break";
?>