<?php
    include_once "../base.php";

    dd($_POST);
    echo $_POST["color"];
    $now=$Footer->find(["sh"=>1]);
    dd($now);
    $change=$Footer->find(["color"=>$_POST["color"]]);
    dd($change);
    if($now["color"]!=$_POST["color"]){
        $now["sh"]=0;
        $change["sh"]=1;
        $Footer->save($now);
        $Footer->save($change);
    }
    to("../back/index.php?do=edit_footer");



?>