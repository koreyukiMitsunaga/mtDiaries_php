<?php
//直接アクセスされた時
if(!isset($_POST["title"])){
	header("location:post.php");
	exit;
}
require("header.php");
require("require/upload/upload.php");
//受信データを変数に
$post_date = date("Y-m-d H:i:s");
$photo = $file1;
$user_id = $_SESSION["user"]["user_id"];
$title = htmlspecialchars($_POST["title"],ENT_QUOTES);
$mountain = htmlspecialchars($_POST["mountain"],ENT_QUOTES);
$entryDate = htmlspecialchars($_POST["entryDate"],ENT_QUOTES);
$descentDate = htmlspecialchars($_POST["descentDate"],ENT_QUOTES);
$weather = htmlspecialchars($_POST["weather"],ENT_QUOTES);
$course1 = htmlspecialchars($_POST["course1"],ENT_QUOTES);
$course2 = htmlspecialchars($_POST["course2"],ENT_QUOTES);
$course3 = htmlspecialchars($_POST["course3"],ENT_QUOTES);
$time = htmlspecialchars($_POST["time"],ENT_QUOTES);
$gear = htmlspecialchars($_POST["gear"],ENT_QUOTES);
$text = htmlspecialchars($_POST["text"],ENT_QUOTES);
require("require/db/dbConnect.php");
require("require/db/postDB.php");
?>
	<main class="innerCenter wt300">
		<h2>記事を投稿しました</h2>
		<p class="mg-t50"><img src="images/thanks.png"></p>
		<a href="index.php"><p class="mg-t50">＜トップに戻る</p></a>
	</main>
<?php require("footer.php");?>