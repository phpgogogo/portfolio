<?php

    include_once "../base.php";

    dd($_POST);
    $contact=$Contact_text->find(1);
    $contact["tel"]=$_POST["tel"];
    $contact["email"]=$_POST["email"];
    $contact["time"]=$_POST["time"];
    // dd($contact);
    $Contact_text->save($contact);

    to("../back/index.php?do=edit_contact_text");



?>