<?php
$post_id = $_POST["post_id"];
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/ad_postDB_edit.php");
if(!($_FILES["photo"]["name"]=="")){
	require("require/upload/upload.php");
}else{
	$file1 = $photo;
}
//受信データを変数に
$photo = $file1;
$title = htmlspecialchars($_POST["title"],ENT_QUOTES);
$mountain = htmlspecialchars($_POST["mountain"],ENT_QUOTES);
$entryDate = "'".htmlspecialchars($_POST["entryDate"],ENT_QUOTES)."'";
if($entryDate=="''"){
	$entryDate="null";
}
$descentDate = "'".htmlspecialchars($_POST["descentDate"],ENT_QUOTES)."'";
if($descentDate=="''"){
	$descentDate="null";
}
$weather = "'".htmlspecialchars($_POST["weather"],ENT_QUOTES)."'";
if($weather=="''"){
	$weather="null";
}
$course1 = "'".htmlspecialchars($_POST["course1"],ENT_QUOTES)."'";
if($course1=="''"){
	$course1="null";
}
$course2 = "'".htmlspecialchars($_POST["course2"],ENT_QUOTES)."'";
if($course2=="''"){
	$course2="null";
}
$course3 = "'".htmlspecialchars($_POST["course3"],ENT_QUOTES)."'";
if($course3=="''"){
	$course3="null";
}
$time = "'".htmlspecialchars($_POST["time"],ENT_QUOTES)."'";
if($time=="''"){
	$time="null";
}
$gear = "'".htmlspecialchars($_POST["gear"],ENT_QUOTES)."'";
if($gear=="''"){
	$gear="null";
}
$text = htmlspecialchars($_POST["text"],ENT_QUOTES);

require("require/db/dbConnect.php");
$sql = "update post set photo = '$photo', title = '$title', mountain = '$mountain', entryDate = $entryDate, descentDate = $descentDate, weather = $weather, course1 = $course1, course2 = $course2, course3 = $course3, time = $time, gear = $gear, text = '$text' where post_id = '$post_id'";
$dbInfo->query($sql);
$dbInfo = null;
header("location:admin_post.php");