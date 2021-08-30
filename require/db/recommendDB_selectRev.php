<?php
$post_arry = new ArrayObject ();

//検索文字を元にpostテーブルから降順で表示
$sql = "select * from post join user on post.user_id = user.user_id join mountain on post.mountain = mountain.mountain where post.mountain = '北穂高岳' order by post_id desc";
foreach($dbInfo->query($sql) as $record){
	$post_id = $record["post_id"];
	$post_date = $record["post_date"];
	$photo = $record["photo"];
	$user_id = $record["user_id"];
	$title = $record["title"];
	$mountain = $record["mountain"];
	$entryDate = $record["entryDate"];
	$descentDate = $record["descentDate"];
	$weather = $record["weather"];
	$course1 = $record["course1"];
	$course2 = $record["course2"];
	$course3 = $record["course3"];
	$pTime = $record["time"];
	$gear = $record["gear"];
	$text = $record["text"];
	$user_name = $record["user_name"];
	$user_img = $record["user_img"];
	$profile = $record["profile"];
	$elevation = $record["elevation"];
	$place = $record["place"];
	$mt_range = $record["mt_range"];
	$value = new mtPost($post_id, $post_date, $photo, $user_id, $title, $mountain, $entryDate, $descentDate, $weather, $course1, $course2, $course3, $pTime, $gear, $text, $user_name, $user_img, $profile, $elevation, $place, $mt_range);
	$post_arry->append($value);
}

//ページリンクのためのデータ数カウント
$sql = "select count(post_id) from post where mountain = '北穂高岳'";
foreach($dbInfo->query($sql) as $record){
	$count_post_id = $record["count(post_id)"];
}

$dbInfo = null;