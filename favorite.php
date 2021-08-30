<?php
session_start();
$user_id = $_SESSION["user"]["user_id"];
$post_id = $_POST["favorite"];
require("require/db/dbConnect.php");
require("require/db/favoriteDB.php");
header("location:article.php?post_id=$post_id#favoriteBtn_clicked");
exit;
