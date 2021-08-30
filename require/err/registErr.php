<?php
$err = 0;
if($userName==""){
	echo "ユーザー名を入力してください<br>" ;
	$err=1;
}elseif(mb_strlen($userName)>20){
	echo "ユーザー名は20文字以内で入力してください<br>";
	$err=1;
}

if($userId==""){
	echo "ユーザーIDを入力してください<br>";
	$err=1;
}elseif(mb_strlen($userId)>34){
	echo "ユーザーIDは34文字以内で入力してください<br>";
	$err=1;
}
if ($userId!=="" && preg_match("/^[a-zA-Z0-9]+$/", $userId)==false) {
    echo "ユーザーIDは半角英数字で入力してください<br>";
	$err=1;
} 

if($email==""){
	echo "メールアドレスを入力してください<br>";
	$err=1;
}elseif(mb_strlen($email)>34){
	echo "メールアドレスは34文字以内で入力してください<br>";
	$err=1;
}
if ($email!=="" && preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)==false) {
    echo "メールアドレスは半角英数字で入力してください<br>";
	$err=1;
} 

if($pass==""){
	echo "パスワードを入力してください<br>";
	$err=1;
}elseif(mb_strlen($pass)>34){
	echo "パスワードは34文字以内で入力してください<br>";
	$err=1;
}
if ($pass!=="" && preg_match("/^[a-zA-Z0-9]+$/", $pass)==false) {
    echo "パスワードは半角英数字で入力してください<br>";
	$err=1;
} 

if($err!=0){
	require("regist.php");
	exit;
}