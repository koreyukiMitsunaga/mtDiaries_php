<?php
require("require/db/dbConnect.php");
require("require/class/class_mtContact.php");
require("require/db/ad_contactDB_select.php");
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="サイト説明文70文字程度">
<meta name="author" content="koreyuki mitsunaga">
<title>管理ページ</title>
<link href="css/normalize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/admin_style.css" rel="stylesheet">
</head>

<body>
	<header>
		<div id="heading">
			<h1>管理ページ</h1>
		</div>
		<div id="lNavi">
			<ul>
				<li><h2><a href="admin_user.php" class="lNavi_hover">ユーザー</a></h2></li>
				<li><h2><a href="admin_post.php" class="lNavi_hover">投稿</a></h2></li>
				<li><h2><a id="selected">お問い合わせ</a></h2></li>
				<li><h2><a href="index.php" class="lNavi_hover">ページに戻る</a></h2></li>
			</ul>
		</div>
	</header>
	<main class="innerForm adPost">
		<div id="ad_table">
			<table border="1px">
				<caption>お問い合わせ</caption>
				<tr>
					<th>投稿日</th>
					<th>投稿者</th>
					<th>email</th>
					<th>種類</th>
					<th>タイトル</th>
					<th>テキスト</th>
				<tr>
				<?php
					foreach ( $adContact_arry as $value ) {
						$value->ad_printData ();
					}
				?>
				</tr>
			</table>
		</div>
	</main>
</body>
</html>