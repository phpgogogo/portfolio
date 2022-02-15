<?php
    include_once "../base.php";

    $id=$_GET["id"];
    echo $id;
    $block=$Block->find($id);
    $block["sh"]=($block["sh"]+1)%2;
    $Block->save($block);

    to("../back/index.php?do=block");

?>