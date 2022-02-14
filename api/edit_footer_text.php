<?php

    include_once "../base.php";

    dd($_POST);
    $footer=$Footer_text->find(1);
    $footer["text"]=$_POST["text"];
    // dd($footer);
    $Footer_text->save($footer);

    to("../back/index.php?do=edit_footer_text");



?>