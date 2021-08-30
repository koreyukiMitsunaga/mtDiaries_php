<?php
$err = 0;
if($photo==""){
	echo "画像ファイルを選んでください<br>" ;
	$err=1;
}
if($title==""){
	echo "タイトルを入力してください<br>";
	$err=1;
}elseif(mb_strlen($title)>34){
	echo "タイトルは30文字以内で入力してください<br>";
	$err=1;
}
if($mountain=="選択してください" or $mountain==""){
	echo "山の名前を選択してください<br>";
	$err=1;
}
if($entryDate>$descentDate && $descentDate!==""){
	echo "入山日は下山日より前に設定してください<br>";
	$err=1;
}
if(mb_strlen($weather)>30){
	echo "天候は30文字以内で入力してください<br>";
	$err=1;
}
if(mb_strlen($course1)>100){
	echo "コース1は100文字以内で入力してください<br>";
	$err=1;
}
if(mb_strlen($course2)>100){
	echo "コース2は100文字以内で入力してください<br>";
	$err=1;
}
if(mb_strlen($course3)>100){
	echo "コース3は100文字以内で入力してください<br>";
	$err=1;
}
if(mb_strlen($time)>50){
	echo "タイムは50文字以内で入力してください<br>";
	$err=1;
}
if(mb_strlen($gear)>300){
	echo "装備は300文字以内で入力してください<br>";
	$err=1;
}
if($text==""){
	echo "テキストを入力してください<br>";
	$err=1;
}elseif(mb_strlen($text)>1000){
	echo "テキストは1000文字以内で入力してください<br>";
	$err=1;
}
if($err!=0){
	require("post.php");
	exit;
}