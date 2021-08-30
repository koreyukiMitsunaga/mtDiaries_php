<?php
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/ad_postDB_select.php");
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
				<li><h2><a id="selected">投稿</a></h2></li>
				<li><h2><a href="admin_contact.php" class="lNavi_hover">お問い合わせ</a></h2></li>
				<li><h2><a href="index.php" class="lNavi_hover">ページに戻る</a></h2></li>
			</ul>
		</div>
	</header>
	<main class="innerForm adPost">
		<div id="ad_table">
			<table border="1px">
				<caption>投稿記事</caption>
				<tr>
					<th>投稿時間</th>
					<th>写真</th>
					<th>ユーザーid</th>
					<th>タイトル</th>
					<th>山名</th>
					<th>入山日</th>
					<th>下山日</th>
					<th>コース1</th>
					<th>コース2</th>
					<th>コース3</th>
					<th>時間</th>
					<th>装備</th>
					<th>テキスト</th>
					<th>操作</th>
				<tr>
				<?php
					foreach ( $adPost_arry as $value ) {
						$value->ad_printData ();
					}
				?>
				</tr>
			</table>
		</div>
	</main>
</body>
</html>