<?php
// print_r($_FILES);
if($_FILES['fileupload']){
	$path = $_FILES['fileupload']['name'];
	$upload_path="./upload/".$path;
	
	if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path)){
		echo "file uploaded";
	}else{
		die ("fail to upload");
	}
}else{
	die("no file found");

}
?>