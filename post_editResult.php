<?php
//直接アクセスされた時
if(!isset($_POST["title"])){
	header("location:post.php");
	exit;
}
require("header.php");
if(!($_FILES["photo"]["name"]=="")){
	require("require/upload/upload.php");
}else{
	$file1 = $_POST["post_photo"];
}
//受信データを変数に
$photo = $file1;
$user_id = $_SESSION["user"]["user_id"];
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
$post_id = $_POST["post_id"];
require("require/db/dbConnect.php");
require("require/db/post_editDB.php");
?>
	<main class="innerCenter wt300">
		<h2>記事を更新しました</h2>
		<p class="mg-t50"><img src="images/thanks.png"></p>
		<a href="index.php"><p class="mg-t50">＜トップに戻る</p></a>
	</main>
<?php require("footer.php");?>