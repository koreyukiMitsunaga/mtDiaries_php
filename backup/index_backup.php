<?php
session_start();
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/postDB_selectRev.php");
//print_r($_SESSION);
require("header.php");
?>
	<main>
		<div id="keyVisual_wp">
			<div id="slide">
				<div id="keyVisual">
					<ul>
						<li><h2><a href="#"><img src="images/keyVisual01.jpg" alt=""><p class="kV_text">槍ヶ岳</p></a></h2></li>
						<li><h2><a href="#"><img src="images/keyVisual02.jpg" alt=""><p class="kV_text">布引滝から摩耶山へ</p></a></h2></li>
						<li><h2><a href="#"><img src="images/keyVisual03.jpg" alt=""><p class="kV_text">六甲山横池でハイキング</p></a></h2></li>
					</ul>
				</div><!--/#keyVisual-->
				<button id="prevBtn"><img src="images/prev.png" width="29px" height="50px" alt="Prev"></button>
				<button id="nextBtn"><img src="images/next.png" width="29px" height="50px" alt="Next"></button>
			</div><!--/#slide-->
		</div><!--/#kv_Wrapper-->
		<div class="inner">
			<div id="lNavi">
				<ul>
					<li><a href="#">新着</a></li>
					<li><a href="#">おすすめ</a></li>
					<li><a href="#">特集</a></li>
				</ul>
			</div><!--/#lNavi-->
			<div id="main">
				<div id="mainLeft">
					<div id="mL_post">
						<?php
						foreach ( $post_arry as $pValue ) {
							$pValue->cardData ();
						}
						?>
					</div><!--/#mL_post-->
				</div><!--/#mainLeft-->
				<div id="mainRight">
					<div id="mR_content">
						<div id="mR_content_news">
							<h4>お知らせ</h4>
							<ul>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
							</ul>
						</div><!--/#mr_content_news-->
						<div id="mR_content_link">
							<h4>山の日記帳のこと</h4>
							<p><a href="#">山の日記帳とは</a></p>
							<p><a href="#">お問い合わせ</a></p>
						</div><!--/#mR_content_link-->
					</div><!--/#mR_content-->
				</div><!--/#mainRight-->
			</div><!--/#main-->
		</div><!--/.inner-->
	</main>
<?php require("footer.php");?>
