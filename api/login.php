<?php

include_once "../base.php";

if(isset($_SESSION["error"])){
    unset($_SESSION["error"]);
}

$acc=$_POST["acc"];
$pw=$_POST["pw"];
// dd($_POST);

if($acc=="admin" && $pw="1234"){
    $_SESSION["user"]=$acc;
    to("../back/index.php");
}else{
    $_SESSION["error"]="error";
    to("../login.php");
}





?>