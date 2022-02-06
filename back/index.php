<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台管理</title>
</head>
<body>

<!-- content -->
<div class="container mb-5">
    <?php
    if(isset($_GET["do"])){
        $do=$_GET["do"];
    }else{
        $do="manage";
    }
    $web=$do . ".php";
    if (file_exists($web)) {
        include $web;
    }else {
        include "manage.php";
    }




?>
</div>
</body>
</html>