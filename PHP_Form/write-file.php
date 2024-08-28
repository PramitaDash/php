<?php
if(isset($_POST['filename'])){
$filename="files/".$_POST['filename'];
$content="this is a dummy file";
$file= fopen($filename, "w") or die("unable tp create file");
fwrite($file,$content);
fclose($file);
echo "file created";
}
?>

<form action="" method="post">
	<input type="text" placeholder="enter file name" name="filename"/>
	<br/>
	<br/>
	<textarea name="content"></textarea>
	<br/>
	<br/>
	<button>Create file </button>
</form>