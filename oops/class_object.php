<?php
class MathOperarions{
	public $val=30;
	function sum($a,$b){
		echo $a+$b;
	}

	function multi($a,$b){
		echo $a*$b;
	}

	function sub($a,$b){
		echo $a-$b;
	}
}

$maths= new MathOperations();
	$maths->sum(20,30);
	echo "<br/>";
	$maths->multi(100,200);

$maths1= new MathOperations();
	echo "<br/>";
	$maths1->sub(1000,2000);
?>