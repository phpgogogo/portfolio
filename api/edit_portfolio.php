<?php
include_once "../base.php";
dd($_POST);
foreach($_POST["id"] as $key=>$id){
    if($_POST["del"] && in_array($id,$_POST["del"])){
        $Portfolios->del($id);
    }else{
        $po=$Portfolios->find($id);
        $po["title"]=$_POST["title"][$key];
        $po["link"]=$_POST["link"][$key];
        $po["sh"]=($_POST["sh"] && in_array($id,$_POST["sh"]))?1:0;
        $po["class"]=$_POST["class"][$key];

        $Portfolios->save($po);
        dd($po);
    }
}
to("../back/index.php?do=edit_portfolio");


?>