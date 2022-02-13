<?php
    include_once "../base.php";

    dd($_POST);
    $Footer->save($_POST);

    to("../back/index.php?do=edit_footer");

?>