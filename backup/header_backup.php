<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="サイト説明文70文字程度">
<meta name="author" content="koreyuki mitsunaga">
<title>山の日記帳</title>
<link href="css/normalize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
	<header>
		<div id="headerLeft">
			<h1 id="hL_logo">
				<a href="index.php"><img src="images/logo.png" alt="山の日記帳"></a>
			</h1>
			<div id="hL_img">
				<img src="images/mountain_header.png" alt="">
			</div><!--/#hL_img-->
		</div><!--/#headerLeft-->
		<nav id="gNavi">
			<ul>
				<li id="gNavi_search">
					<input type="sarch" class="textbox"><a href="#" ><img src="images/search.png" alt=""></a>
				</li>
				<?php if(isset($_SESSION["user"])):?>
					<li><a href="post.php" id="gNavi_post" class="opa">投稿</a></li>
					<li><a href="logout.php" id="gNavi_logout" class="opa">ログアウト</a></li>
					<li><a href="myPage.php" id="gNavi_myPage" class="opa"><img src="images/myPage.png" alt=""></a></li>
				<?php else:?>
					<li><a href="regist.php" id="gNavi_regist" class="opa">会員登録</a></li>
					<li><a href="login.php" id="gNavi_login" class="opa">ログイン</a></li>
				<?php endif;?>
			</ul>
		</nav>
	</header>