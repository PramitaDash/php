<!DOCTYPE html>
<html lang="en">
<head>
	<title>Session</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="user" placeholder="Enter user name"/>
		<br/>
		<br/>
		<button name="button" value="set" >Set session</button>
		<br/>
		<br/>
		<button name="button" value="get" >Get session</button>
		<br/>
		<br/>
		<button name="button" value="delete">Delete seeion</button>
</form>
</body>
</html>

<?php
session_start();
if(isset($_POST['button'])){
	if($_POST['button']=="set"){
		$val=$_POST['user'];
		$_SESSION['user']=$val;
		echo "session set.";
	}
	if($_POST['button']=="get"){
		if(isset($_SESSION['user'])){
		echo $_SESSION['user'];
		}else{
			echo "no session found";
		}
	}
	if($_POST['button']=="delete"){
		session_destroy();
	}
}
?>