<?php
require("header.php");
//get送信したurlからidを取得
$uri = $_SERVER["REQUEST_URI"];
$uri_id = strstr($uri, 'id=');
$target_uri = substr($uri_id, 3);
require("require/db/dbConnect.php");
//favorite用
$f_post = "empty";
if(isset($_SESSION["user"])){
	$sql = "select * from favorite where user_id = '$session_user_id' and post_id = '$target_uri'";
	foreach($dbInfo->query($sql) as $record){
		$f_post = $record["user_id"];
	}
}
require("require/class/class_mtPost.php");
require("require/db/postDB_selectUri.php");

?>
	<main>
		<div id="article">
			<?php
			if(!isset($session_user_id)){
				$session_user_id="empty";
			}
			if($user_id==$session_user_id){
				echo '<form method="post" name="form2" action="post_edit.php">';
				echo '<input type="hidden" name="post_id" value="'.$post_id.'">';
				echo '<a href="javascript:form2.submit()" id="a_edit" class="btn glay opa">記事を編集</a>';
				echo '</form>';
			}
			?>
			<h2 id="a_title"><?php echo $title;?></h2>
			<p id="a_photo"><img src="<?php echo $photo;?>" alt=""></p>
			<form method="post" name="form1" action="accountPage.php">
				<div id="a_account">
					<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
					<a href="javascript:form1.submit()" class="opa"><img src="<?php echo $user_img;?>" alt=""></a>
					<div id="a_account_text">
						<p><?php echo $user_name;?></p>
						<time><?php echo $post_date;?></time>
					</div><!--/#a_account_text-->
				</div><!--/#a_account-->
			</form>
			<div id="a_data">
				<div id="a_data_mt">
				<table border="1px" id="mt_table">
					<caption><i class="fas fa-mountain"></i>山の情報</caption>
					<tbody>
						<tr>
							<th scope="col">山名</th>
							<th scope="col">標高</th>
							<th scope="col">場所</th>
							<th scope="col">山系</th>
						</tr>
						<tr>
							<td><?php echo $mountain;?></td>
							<td><?php echo $elevation;?>m</td>
							<td><?php echo $place;?></td>
							<td><?php echo $mt_range;?></td>
						</tr>
					</tbody>
				</table>
				</div><!--/#a_data_mt-->
				<div id="a_data_other">
					<table>
						<tbody>
							<?php if($entryDate!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-hiking"></i>入山日</th>
								<td><?php echo $entryDate;?></td>
							</tr>
							<?php endif; ?>
							<?php if($descentDate!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-hiking"></i>下山日</th>
								<td><?php echo $descentDate;?></td>
							</tr>
							<?php endif; ?>
							<?php if($weather!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-sun"></i>天候</th>
								<td><?php echo $weather;?></td>
							</tr>
							<?php endif; ?>
							<?php if($pTime!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-stopwatch"></i>タイム</th>
								<td><?php echo $pTime;?></td>
							</tr>
							<?php endif; ?>
							<?php if($course1!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-directions"></i>コース1</th>
								<td><?php echo $course1;?></td>
							</tr>
							<?php endif; ?>
							<?php if($course2!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-directions"></i>コース2</th>
								<td><?php echo $course2;?></td>
							</tr>
							<?php endif; ?>
							<?php if($course3!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-directions"></i>コース3</th>
								<td><?php echo $course3;?></td>
							</tr>
							<?php endif; ?>
							<?php if($gear!==null): ?>
							<tr>
								<th scope="row"><i class="fas fa-tshirt"></i>装備</th>
								<td>
								<p><?php echo nl2br($gear);?></p>
								</td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div><!--/#a_data_other-->
				<div id="a_text">
					<p><?php echo nl2br($text);?></p>
				</div><!--/#a_text-->
				<div class="mg-t20">
					<?php
					if(isset($session_user_name) && $f_post == 'empty'){
						echo '<form method="post" name="form3" action="favorite.php">';
						echo '<input type="hidden" name="favorite" value="'.$post_id.'">';
						echo '<a href="javascript:form3.submit()" id="favoriteBtn" class="opa"><img src="images/favolite_off.png" alt="">&nbsp;favorite</a>';
						echo '</form>';
					}elseif(isset($session_user_name)){
						echo '<form method="post" name="form3" action="favorite.php">';
						echo '<input type="hidden" name="favorite" value="'.$post_id.'">';
						echo '<a id="favoriteBtn_clicked"><img src="images/favolite_on.png" alt="">&nbsp;favorited</a>';
						echo '</form>';
					}
					?>
				</div>
			</div><!--/#a_data-->
			<div class="formSubmit mg-t50">
				<input type="button" onclick="history.back()" value="戻る" class="mg-r20 btn glay opa">
			</div>
		</div><!--/#article-->
		
	</main>
<?php require("footer.php");?>