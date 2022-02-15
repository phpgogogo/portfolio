<?php
include_once "../base.php";
dd($_POST);
dd($_FILES);
// 判斷是否上傳成功 , tmp_name存在表示上傳成功
if(isset($_FILES["img"]["tmp_name"])){
    $_POST["img"]=$_FILES["img"]["name"];
    move_uploaded_file($_FILES["img"]["tmp_name"],"../img/" . $_POST["img"]);
}

$_POST["sh"]=0;
dd($_POST);

$Introimg->save($_POST);
to("../back/index.php?do=edit_intro");


?>