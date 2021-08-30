<?php
$err = 0;
if($c_name==""){
	echo "名前を入力してください<br>" ;
	$err=1;
}elseif(mb_strlen($c_name)>20){
	echo "名前は20文字以内で入力してください<br>";
	$err=1;
}

if($c_email==""){
	echo "メールアドレスを入力してください<br>";
	$err=1;
}elseif(mb_strlen($c_email)>20){
	echo "メールアドレスは20文字以内で入力してください<br>";
	$err=1;
}

if($c_kind=="select" || $c_kind==""){
	echo "お問い合わせの種類を選択してください<br>";
	$err=1;
}

if($c_title==""){
	echo "お問い合わせの件名を入力してください<br>";
	$err=1;
}elseif(mb_strlen($c_title)> 50){
	echo "お問い合わせの件名は50文字以内で入力してください<br>";
	$err=1;
}

if($c_text==""){
	echo "お問い合わせの内容を入力してください<br>";
	$err=1;
}elseif(mb_strlen($c_title)> 500){
	echo "お問い合わせの内容は500文字以内で入力してください<br>";
	$err=1;
}
if($err!=0){
	require("contact.php");
	exit;
}