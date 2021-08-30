<?php
//
$sql = "update user set user_name = '$setting_name', profile = '$setting_prof' , user_img = '$setting_img' where user_id = '$user_id'";
$stmt = $dbInfo->query($sql);
$stmt->execute ();

//foreach($dbInfo->query($sql) as $record){
//	$regist_date = $record["regist_date"];
//	$user_id = $record["user_id"];
//	$user_name = $record["user_name"];
//	$email = $record["email"];
//	$pass = $record["password"];
//	$profile = $record["profile"];
//	$user_img = $record["user_img"];
//	$value = new mtUser($regist_date, $user_id, $user_name, $email, $pass, $profile, $user_img);
//	$login_arry->append($value);
//}
//if(!isset($value)){
//	$err = 1;
//	require("login.php");
//	exit;
//}
//if(!(password_verify($post_pass, $pass))){
//	$err = 1;
//	require("login.php");
//	exit;
//}
//
//echo "<h4>データベースの表示</h4>";
//echo "<table border='1'>";
//echo "<thead align='center'>";
//echo "<tr><td>regist_date</td><td>user_id</td><td>user_name</td><td>email</td><td>pass</td><tr>";
//echo "</thead>";
//echo "<tbody>";
//foreach ( $login_arry as $pValue ) {
//	$pValue->printData ();
//}
//echo "<tbody>";
//echo "</table>";

// データベースの切断
$dbInfo = null;