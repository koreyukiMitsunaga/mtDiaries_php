<?php
require("header.php");
?>
	<main class="innerCenter">
		<h2>サイト内検索</h2>
		<form action="search.php" name="search" method="post" class="mg-t20">
			<input type="search" name="search" class="searchBox">
			<input type="submit" name="btn" value="検索" id="searchBtn" class="btn blue opa mg-t20">
		</form>
	</main>
<?php require("footer.php");?>