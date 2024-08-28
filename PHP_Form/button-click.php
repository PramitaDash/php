<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<button name="button" value="btn1">
			call function
	</button>
</body>
</html>
<?php
if(isset($_POST['button'])){
	btn_click_test();
}
function btn_click_test(){
	echo "function called on button click";
}
?>