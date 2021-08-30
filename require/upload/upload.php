<?php
$file_name=$_FILES["photo"]["name"];
$file_type=$_FILES["photo"]["type"];
$tmp_name=$_FILES["photo"]["tmp_name"];
$file_size=$_FILES["photo"]["size"];

//保存用ディレクトリーを指定
$dir_name = "postImg/imgx";
//サムネイル保存用ディレクトリーを指定
$dir_thumbname = "postImg/thumb";

//ファイル拡張子をget
$extension = pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
//jpg,jpeg,png,gif以外はエラー

//保存用ディレクトリーを作成
if(!is_dir("$dir_name")){mkdir("$dir_name");}
//サムネイル保存用ディレクトリーを作成
if(!is_dir("$dir_thumbname")){mkdir("$dir_thumbname");}
//保存ファイル名を作成
$image_name="img_".date("YmdHis")."_".rand(1000,9999).".".$extension;
$upload_file="{$dir_name}/{$image_name}";

//アップロード
move_uploaded_file($_FILES['photo']['tmp_name'],$upload_file);

$file1 = "{$dir_name}/"."$image_name";
$file2 = "{$dir_thumbname}/"."$image_name";
//元画像ファイル読み込み($in=ImageCreateFormJPEG($file1);)
switch($extension){
	case"gif":
	case"GIF";
		$in=ImageCreateFromGIF($file1);
		break;
	case"jpeg":
	case"jpg":
	case"JPG";
	case"JPEG";
		$in=ImageCreateFromJPEG($file1);
		break;
	case"PNG";
	case"png":
		$in=ImageCreateFromPNG($file1);
		break;
	default:
		exit();
}

//以下サムネイル化
//ファイルのサイズを調べる
$size = GetImageSize($file1);
//$size[0]=幅　$size[1]=高　$size[2]=タイプ　 タイプ:1=gif 2=jpg 3=png

$width = 700; //幅を120に揃える
$height = $size[1]*$width/$size[0]; //縦横の比率が変わらないように計算

$out = ImageCreateTrueColor($width,$height); //キャンバスを用意
ImageCopyResampled($out,$in,0,0,0,0,$width,$height,$size[0],$size[1]); //画像をリサイズ

switch($extension){
	case"gif":
	case"GIF";
		imageGIF($out,$file2);
		break;
	case"jpeg":
	case"jpg":
	case"JPG";
	case"JPEG";
		imageJPEG($out,$file2);
		break;
	case"PNG";
	case"png":
		imagePNG($out,$file2);
		break;
	default:
		exit();
}
imageDestroy($in);
imageDestroy($out);