<?php
$delete_id = $_POST["delete_post_id"];

require("require/db/dbConnect.php");

$sql = "delete from post where post_id = '$delete_id'";
$dbInfo->query($sql);

header("location:myPage.php");