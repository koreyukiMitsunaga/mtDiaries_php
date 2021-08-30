<?php
require("header.php");
//urlからidナンバーを取得
$uri = $_SERVER["REQUEST_URI"];
$uri_id = strstr($uri, 'page=');
$target_uri = substr($uri_id, 5);
if($target_uri!=""){
$start = ($target_uri-1)*6;
}else{
	$target_uri = 1;
	$start = 0;
}
require("require/db/dbConnect.php");
require("require/class/class_mtPost.php");
require("require/db/recommendDB_selectRev.php");
?>
	<main>
		<div id="keyVisual">
			<div id="jQ_slide">
				<div id="kV_img">
					<ul>
						<li><h2><a href="article.php?post_id=41"><img src="images/keyVisual01.jpg" alt=""><p class="kV_text">夏の北穂高</p></a></h2></li>
						<li><h2><a href="article.php?post_id=42"><img src="images/keyVisual03.jpg" alt=""><p class="kV_text">六甲山でハイキング</p></a></h2></li>
						<li><h2><a href="article.php?post_id=44"><img src="images/keyVisual02.jpg" alt=""><p class="kV_text">布引の滝</p></a></h2></li>
					</ul>
				</div><!--/#kV_img-->
				<button id="jQ_prevBtn"><img src="images/prev.png" alt="Prev"></button>
				<button id="jQ_nextBtn"><img src="images/next.png" alt="Next"></button>
			</div><!--/#jQ_slide-->
		</div><!--/#keyVisual-->
		<div class="inner">
			<div id="lNavi">
				<ul>
					<li><a class="lNavi_hover" href="index.php">新着</a></li>
					<li><a id="selected" >おすすめ</a></li>
				</ul>
			</div><!--/#lNavi-->
			<div id="content">
				<div id="contentLeft">
					<div id="cL_subjects" class="indexList">
						<?php
						$count_cR = 0;//記事の数が1のとき、コンテンツ右側のマージンを変更
						foreach ($post_arry  as $pValue ){
							$count_cR++;
							$pValue->cardData ();
						}
						?>
					</div><!--/#cL_subjects-->
					<?php
					echo '<div id="pagination">';
						//データの総数から6ごとにページナンバーの数を設定
						$post_num_max = ceil($count_post_id/6);

						$start = 1;
						if($target_uri>2){
							$start = $target_uri-2;
						}
						$end = $start+4;
						echo '<form method="get" name="form1" action="index.php" class="nav-links">';
							if($target_uri!=1){
								$pageBack = $target_uri-1;
								echo '<a class="prev page-numbers" href="index.php?page=1"><<</a>';
								echo '<a class="prev page-numbers" href="index.php?page='.$pageBack.'"><</a>';
							}
							for($i=$start; $i<=$end; $i++){
								if($target_uri==$i){
									echo '<span class="page-numbers_span">'.$i.'</span>';
								}else{
									echo '<input type="submit" name="page" value="'.$i.'" class="page-numbers">';
								}
								if($i==$post_num_max){
									break;
								}
							}
							if($target_uri>=$post_num_max-2 == false){
								$pageNext = $target_uri+1;
								echo '<a class="prev page-numbers" href="index.php?page='.$pageNext.'">></a>';
								echo '<a class="prev page-numbers" href="index.php?page='.$post_num_max.'">>></a>';
							}
						echo '</form>';
					echo '</div><!--/#pagination-->';
					?>
				</div><!--/#contentLeft-->
				<div id="contentRight">
					<div id="cR_subject"<?php if($count_cR==1){echo "class='mg-l330'";}?>>
						<!--<div id="cR_subject_news">
							<h4>お知らせ</h4>
							<ul>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
								<li><a href="#"><span>北アルプス特集開催中</span><br>2020-08-20</a></li>
							</ul>
						</div><!--/#cR_subject_news-->
						<div id="cR_subject_link">
							<h4>山の日記帳のこと</h4>
							<p><a href="about.php">山の日記帳とは</a></p>
							<p><a href="contact.php">お問い合わせ</a></p>
						</div><!--/#cR_subject_link-->
					</div><!--/#cR_subject-->
				</div><!--/#contentRight-->
			</div><!--/#content-->
		</div><!--/.inner-->
	</main>
<?php require("footer.php");?>
