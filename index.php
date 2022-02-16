<?php
    include_once "base.php";

    if(isset($_SESSION["error"])){
        unset($_SESSION["error"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- nav bar -->
    <?php
        include "front/navbar.php";
    ?>
    <!-- jumbotron -->
    <?php
        include "front/jumbotron.php";
    ?>

    <!-- 自我介紹 -->
    <?php
        include "front/intro.php";
    ?>
    <!-- portfolio -->
    <?php
        include "front/portfolio2.php";
    ?>
    <!-- contact -->
    <?php
        include "front/contact.php";
    ?>
    <!-- footer -->
    <?php
        include "front/footer.php";
    ?>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script>
        function about(){
            let about=document.getElementById("about");
            about.scrollIntoView({block:'start',behavior:'smooth'});
        }
        function portfolio(){
            let portfolio=document.getElementById("portfolio");
            portfolio.scrollIntoView({block:'start', behavior:'smooth'});
        }
        // function home(){
        //     let home=document.getElementById("home");
        //     home.scrollIntoView({behavior:'smooth'});
        // }
        function contact(){
            let contact=document.getElementById("contact");
            contact.scrollIntoView({block:'start', behavior:'smooth'});
        }

    </script>
</body>
</html>