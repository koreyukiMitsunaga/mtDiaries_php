<?php
require("header.php");
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/mpFavoriteDB_selectRev.php");
?>
	<main>
		<div id="someCords">
			<div id="sC_head">
				<img src="<?php echo $session_user_userImg;?>">
				<div id="sC_head_text">
					<p id="sC_head_text_name"><?php echo $session_user_name;?></p>
					<p id="sC_head_text_prof"><?php echo $session_user_prof;?></p>
				</div><!--/#sC_head_text-->
			</div><!--/#sC_head-->
			<div id="lNavi">
				<ul>
					<li><a class="lNavi_hover" href="myPage.php">記事一覧</a></li>
					<li><a id="selected" href="myPageFavorite.php">お気に入り</a></li>
					<!-- <li><a class="lNavi_hover" href="#">画像一覧</a></li> -->
					<li><a class="lNavi_hover" href="myPageSetting.php">設定</a></li>
				</ul>
			</div><!--/.lNavi-->
			<div id="sC_content">
				<div id="c_subjects" class="searchList">
					<?php 
					foreach ( $post_arry as $pValue ) {
						$pValue->cardData ();
					}
					?>
				</div><!--/#c_subjects-->
			</div><!--/#sC_content-->
			<div class="formSubmit">
				<input type="button" onclick="history.back()" value="戻る" class="mg-r20 btn glay opa">
			</div>
		</div><!--/#someCards-->
	</main>
<?php require("footer.php");?>