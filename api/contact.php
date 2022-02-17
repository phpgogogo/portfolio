<?php

    include_once "../base.php";

    $Contact->save($_POST);
    to("../thank.php");

?>