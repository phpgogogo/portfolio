<?php
    include_once "../base.php";


    dd($_POST);
    $color=$Footer->find(["color"=>$_POST["color"]]);
    dd($color);
    if($color["intro"]=="預設"){

    }else{
        $Footer->del($color["id"]);
    }

    to("../back/index.php?do=edit_footer");

?>