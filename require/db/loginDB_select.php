<?php
$login_arry = new ArrayObject ();

//userテーブルのid、メール、passと入力したデータを照合
$sql = "select * from user where (user_id = '$post_user' or email = '$post_user')";
foreach($dbInfo->query($sql) as $record){
	$regist_date = $record["regist_date"];
	$user_id = $record["user_id"];
	$user_name = $record["user_name"];
	$email = $record["email"];
	$pass = $record["password"];
	$profile = $record["profile"];
	$user_img = $record["user_img"];
	$value = new mtUser($regist_date, $user_id, $user_name, $email, $pass, $profile, $user_img);
	$login_arry->append($value);
}
if(!isset($value)){
	$err = 1;
	require("login.php");
	exit;
}
if(!(password_verify($post_pass, $pass))){
	$err = 1;
	require("login.php");
	exit;
}


// データベースの切断
$dbInfo = null;