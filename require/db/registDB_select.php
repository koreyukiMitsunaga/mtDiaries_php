<?php
//user_idと照合
$sql = "select user_id from user where user_id = '$userId'";
foreach($dbInfo->query($sql) as $record){
	$userId_check = $record["user_id"];
}
$err = 0;
if(isset($userId_check)){
	$id_err = 1;
	$err = 1;
}
//user_emailと照合
$sql = "select email from user where email = '$email'";
foreach($dbInfo->query($sql) as $record){
	$email_check = $record["email"];
}
if(isset($email_check)){
	$email_err = 1;
	$err = 1;
}
// データベースの切断
$dbInfo = null;
//errがあればregist.phpへ
if($err==1){
	require("regist.php");
	exit;
}
