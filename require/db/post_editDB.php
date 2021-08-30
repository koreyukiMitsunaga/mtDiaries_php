<?php

$sql = "update post set photo = '$photo', title = '$title', mountain = '$mountain', entryDate = $entryDate, descentDate = $descentDate, weather = $weather, course1 = $course1, course2 = $course2, course3 = $course3, time = $time, gear = $gear, text = '$text' where post_id = '$post_id'";
$stmt = $dbInfo->prepare( $sql );
$stmt->execute ();

$dbInfo = null;
