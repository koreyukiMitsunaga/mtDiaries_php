<?php
session_start();
//直接アクセスされた時
//if(!isset($_POST["title"])){
//	header("location:post.php");
//	exit;
//}
session_destroy();
header("location:index.php");