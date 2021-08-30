<?php
$adUser_arry = new ArrayObject ();

$sql = "select * from user where user_id = '$user_id'";
foreach($dbInfo->query($sql) as $record){
	$regist_date = $record["regist_date"];
	$user_id = $record["user_id"];
	$user_name = $record["user_name"];
	$email = $record["email"];
	$pass = $record["password"];
	$profile = $record["profile"];
	$user_img = $record["user_img"];
	$value = new mtUser($regist_date, $user_id, $user_name, $email, $pass, $profile, $user_img);
	$adUser_arry->append($value);
}

// データベースの切断
$dbInfo = null;