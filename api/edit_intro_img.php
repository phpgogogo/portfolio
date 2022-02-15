<?php
    include_once "../base.php";

    dd($_POST);
    foreach($_POST["id"] as $key=>$id){
        if($_POST["del"] && in_array($id,$_POST["del"])){
            $Introimg->del($id);
        }else{
            $intro=$Introimg->find($id);
            $intro["name"]=$_POST["name"][$key];
            $intro["sh"]=($_POST["sh"]==$id)?1:0;
    
            $Introimg->save($intro);
            dd($intro);
        }
    }
    to("../back/index.php?do=edit_intro");


?>