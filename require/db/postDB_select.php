<?php
$post_arry = new ArrayObject ();

$sql = "select * from post join user on post.user_id = user.user_id join mountain on post.mountain = mountain.mountain";
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
	$elevation = $record["elevation"];
	$place = $record["place"];
	$mt_range = $record["mt_range"];
	$value = new mtPost($post_id, $post_date, $photo, $user_id, $title, $mountain, $entryDate, $descentDate, $weather, $course1, $course2, $course3, $pTime, $gear, $text, $user_name, $elevation, $place, $mt_range);
	$post_arry->append($value);
}

//echo "<h4>データベースの表示</h4>";
//echo "<table border='1'>";
//echo "<thead align='center'>";
//echo "<tr><td>post_id</td><td>post_date</td><td>photo</td><td>title</td><td>mountain</td><td>entryDate</td><td>descentDate</td><td>weather</td><td>course1</td><td>course2</td><td>course3</td><td>pTime</td><td>gear</td><td>text</td><tr>";
//echo "</thead>";
//echo "<tbody>";
//foreach ( $post_arry as $pValue ) {
//	$pValue->printData ();
//}
//echo "<tbody>";
//echo "</table>";

// データベースの切断
$dbInfo = null;