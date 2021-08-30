<?php
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="サイト説明文70文字程度">
<meta name="author" content="koreyuki mitsunaga">
<title>山の日記帳</title>
<link href="mtDiaries_php/css/normalize.css" rel="stylesheet">
<link href="mtDiaries_php/css/style.css" rel="stylesheet">
<style>
	#flex{
		display: flex;
	}
	
</style>
</head>

<body id="top">
<div id="wrapper">
	<header>
		<div id="headerLeft">
			<h1 id="hL_logo"><a href="index.php"><img src="mtDiaries_php/images/logo.png" alt="山の日記帳"></a></h1>
			<div id="hL_mt"><img src="mtDiaries_php/images/mountain_header.png" alt=""></div>
		</div><!--/#hLogo-->
		<nav id="gNavi">
			<ul>
				<li id="gNavi_search"><input type="sarch" class="textbox"><a href="#" ><img src="mtDiaries_php/images/search.png" alt=""></a></li>
				<li><a href="post.php" id="gNavi_post" class="opa">投稿</a></li>
				<li><a href="myPage.html" id="gNavi_myPage"><img src="mtDiaries_php/images/myPage.png" alt=""></a></li>
			</ul>
		</nav>
	</header>
	<div class="inner">
		<form method="get" name="form1" action="mtDiaries_php/article.php">
    		<input type="hidden" name="user_name" value="名前">
    		<a href="javascript:form1.submit()">リンク名</a>
		</form>
	</div>
	<footer>
		<p id="footer_logo"><a href="index.php"><img src="mtDiaries_php/images/logo_white.png"></a></p>
		<p>copyright Koreyuki Mitsunaga</p>
		<p id="foote_mt"><img src="mtDiaries_php/images/mountain_footer.png"></p>
	</footer>
</div><!--/#wrapper-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
