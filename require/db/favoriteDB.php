<?php
$f_post = "empty";
$sql = "select * from favorite where user_id = '$user_id' and post_id = '$post_id'";
foreach($dbInfo->query($sql) as $record){
	$f_post = $record["user_id"];
}
if($f_post=="empty"){
	$sql = "insert into favorite(user_id, post_id) value(:user_id, :post_id)";
	$stmt = $dbInfo->prepare( $sql );
	$stmt->bindParam ( ":user_id", $user_id, PDO::PARAM_STR );
	$stmt->bindParam ( ":post_id", $post_id, PDO::PARAM_STR );
	$stmt->execute ();
}
$dbInfo = null;