<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        if(isset($_SESSION["error"])){
            echo "<div class='text-center text-danger' style='padding-top:30px;'>";
            echo "你真的是管理員嗎??";
            echo "</div>";
        }

    ?>
    <form action="api/login.php" method="post">
        <div class="container p-3" style="margin-top:30px; background-color: #F0F0F0;">
            <h2 class="text-center">管理員登入</h2>
            <div class="row">
                <div class="mx-auto mt-2">
                    帳號:
                    <input class="form-control" type="text" name="acc" required>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto mt-2">
                    密碼:
                    <input class="form-control" type="password" name="pw" required>
                </div>
            </div>
            <div class="text-center">
                <input class="btn btn-success mt-3" type="submit" value="登入">
                <input class="btn btn-danger mt-3" type="reset" value="重置">
            </div>
        </div>

    </form>

    <div class="text-center mt-5"><a class="btn btn-primary" href="index.php">回首頁</a></div>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>