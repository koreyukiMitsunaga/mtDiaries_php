<?php
$file_name=$_FILES["photo"]["name"];
$file_type=$_FILES["photo"]["type"];
$tmp_name=$_FILES["photo"]["tmp_name"];
$file_size=$_FILES["photo"]["size"];

//保存用ディレクトリーを指定
$dir_name = "postImg/accountImg";

//ファイル拡張子をget
$extension = pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);

//保存用ディレクトリーを作成
if(!is_dir("$dir_name")){mkdir("$dir_name");}
//保存ファイル名を作成
$image_name="img_".date("YmdHis")."_".rand(1000,9999).".".$extension;
$upload_file="{$dir_name}/{$image_name}";

//アップロード
move_uploaded_file($_FILES['photo']['tmp_name'],$upload_file);

$file1 = "{$dir_name}/"."$image_name";
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
imageDestroy($in);
