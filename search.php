<?php
header('Cache-Control:');
require("header.php");
$search  = $_POST["search"];
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/searchDB_selectRev.php");
?>
	<main>
		<div id="someCords">
			<div id="sC_head">
				<h2>検索結果</h2>
			</div><!--/#myAccount-->
		<div id="sC_content" >
			<div id="cL_subjects" class="mg-t50 searchList">
				<?php 
				foreach ( $post_arry as $pValue ) {
					$pValue->cardData ();
				}
				?>
			</div><!--/#cL_subjects-->
		</div><!--/#sC_content-->
		<div class="formSubmit">
			<input type="button" onclick="history.back()" value="戻る" class="mg-r20 btn glay opa">
		</div>
		</div><!--/#someCards-->
	</main>
<?php require("footer.php");?>