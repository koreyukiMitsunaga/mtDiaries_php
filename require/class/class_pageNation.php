<?php
class pageNation{
	public function start(){
		if($target_uri!=""){
			$start = ($target_uri-1)*6;
		}else{
			$target_uri = 1;
			$start = 0;
		}
	}
	
	public function pages(){
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
	}
}