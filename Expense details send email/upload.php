<?php

$attachment='';
 
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
 $newimgname = generateRandomString();
 
  if(isset($_FILES['attachment'])){

	$info = pathinfo($_FILES['attachment']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = $newimgname.'.'.$ext; 
	$attachment = 'img/email/'.$newname;
	move_uploaded_file( $_FILES['attachment']['tmp_name'], $attachment);
    echo $attachment;
  }
	