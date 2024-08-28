<?php

$_REQUEST['dummy']="test";
foreach($_REQUEST as $key => $date){
	echo $key ." is ". $date;
	echo "<br/>";
}
?>