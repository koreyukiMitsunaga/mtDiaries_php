<?php
$sql = "insert into post(post_date, photo, user_id, title, mountain, entryDate, descentDate, weather, course1, course2, course3, time, gear, text) value(:post_date, :photo,  :user_id, :title, :mountain, :entryDate, :descentDate, :weather, :course1, :course2, :course3, :time, :gear, :text)";
$stmt = $dbInfo->prepare( $sql );
$stmt->bindParam ( ":post_date", $post_date, PDO::PARAM_STR );
$stmt->bindParam ( ":photo", $photo, PDO::PARAM_STR );
$stmt->bindParam ( ":user_id", $user_id, PDO::PARAM_STR );
$stmt->bindParam ( ":title", $title, PDO::PARAM_STR );
$stmt->bindParam ( ":mountain", $mountain, PDO::PARAM_STR );
if($entryDate===""){
	$stmt->bindValue ( ":entryDate", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":entryDate", $entryDate, PDO::PARAM_STR );
}
if($descentDate===""){
	$stmt->bindValue ( ":descentDate", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":descentDate", $descentDate, PDO::PARAM_STR );
}
if($weather===""){
	$stmt->bindValue ( ":weather", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":weather", $weather, PDO::PARAM_STR );
}
if($course1===""){
	$stmt->bindValue ( ":course1", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":course1", $course1, PDO::PARAM_STR );
}
if($course2===""){
	$stmt->bindValue ( ":course2", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":course2", $course2, PDO::PARAM_STR );
}
if($course3===""){
	$stmt->bindValue ( ":course3", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":course3", $course3, PDO::PARAM_STR );
}
if($time===""){
	$stmt->bindValue ( ":time", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":time", $time, PDO::PARAM_STR );
}
if($gear===""){
	$stmt->bindValue ( ":gear", null, PDO::PARAM_NULL );
}else{
	$stmt->bindParam ( ":gear", $gear, PDO::PARAM_STR );
}
$stmt->bindParam ( ":text", $text, PDO::PARAM_STR );

$stmt->execute ();

$dbInfo = null;