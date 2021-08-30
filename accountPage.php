<?php
session_start();
if(isset($_SESSION["user"])){
	$session_user_id = $_SESSION["user"]["user_id"];
}
$user_id = $_POST["user_id"];
if(isset($_SESSION["user"]) && $user_id==$session_user_id){
	header("location:myPage.php");
}
require("header.php");
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/accDB_selectRev.php");
?>
	<main>
		<div id="someCords">
			<div id="sC_head">
				<img src="<?php echo $user_img;?>">
				<div id="sC_head_text">
					<p id="sC_head_text_name"><?php echo $user_name;?></p>
					<p id="sC_head_text_prof"><?php echo $profile;?></p>
				</div><!--/#sC_head_text-->
			</div><!--/#sC_head-->
			<!--<div id="lNavi">
				<ul>
					<li><a href="#">記事一覧</a></li>
					<li><a href="#">お気に入り</a></li>
					<li><a href="#">画像一覧</a></li>
				</ul>
			</div>--><!--/.lNavi-->
			<div id="sC_content">
				<div id="c_subjects"  class="mg-t20">
					<?php 
					foreach ( $post_arry as $pValue ) {
						$pValue->cardData_mp ();
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