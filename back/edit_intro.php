<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:#eee;">
    <?php
    $rows = $Intro->all();
    // dd($rows);
    foreach ($rows as $row) {
    }
    ?>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-md-6 col-12">
                <h1>About me</h1>
                <div>
                    <label>姓名:</label>
                    <input type="text" id="name" name="name" value="<?= $row["name"]; ?>">
                </div>
                <div>
                    <label>年齡:</label>
                    <input type="text" id="age" name="age" value="<?= $row["age"]; ?>">
                </div>
                <div>
                    <label>興趣:</label>
                    <input type="text" id="hobby" name="hobby" value="<?= $row["hobby"]; ?>">
                </div>
                <div>
                    <label>技能:</label>
                    <input type="text" id="skill" name="skill" value="<?= $row["skill"]; ?>">
                </div>
                <div>
                    <label>自我介紹:</label><br>
                    <textarea style="width:80%;" name="intro" id="intro" cols="30" rows="10"><?= $row["intro"]; ?></textarea>
                </div>
                <div class="mt-2">
                    <button class="btn btn-success" type="button" onclick="edit()">修改intro</button>
                    <a href="../index.php">
                        <button class="btn btn-primary" type="button">回到前台</button>
                    </a>
                    <a href="./index.php"><button class="btn btn-info" type="button">回到後台</button></a>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <?php
                $introimgs = $Introimg->all(["sh" => 1]);
                foreach ($introimgs as $introimg) {
                }
                ?>
                <img id="image" src="../img/<?= $introimg['img']; ?>" width="100%"><br>
            </div>
        </div>
        <h1 class="text-center mt-3">新增頁尾顏色</h1>
        <div class="col-md-6 mx-auto mt-3">
            <form action="../api/add_introimg.php" method="post" enctype="multipart/form-data">
                <div class="text-center p-1">
                    新增圖片:
                    <input type="file" name="img">
                </div>
                <div class="text-center p-1">
                    圖片名稱:
                    <input type="text" name="name">
                </div>
                <div class="text-center">
                    <input type="submit" value="送出">
                </div>
            </form>
        </div>

        <div>
            <form action="../api/edit_intro_img.php" method="post">
                <table class="mx-auto text-center w-100">
                    <tr>
                        <td class="p-3" width="30%">圖片縮圖</td>
                        <td class="p-3" width="30%">圖片名稱</td>
                        <td class="p-3">操作</td>
                    </tr>
                    <?php
                        $imgs=$Introimg->all();
                        foreach($imgs as $img){
                            $checked=($img["sh"]==1)?"checked":"";
                            ?>
                            <tr>
                                <td>
                                    <img src="../img/<?=$img["img"];?>" style="width:100px;object-fit: cover;">
                                </td>
                                <td>
                                    <input type="text" name="name[]" value="<?=$img["name"];?>">
                                </td>
                                <td>
                                    <input type="radio" name="sh" value="<?=$img["id"];?>" <?=$checked;?>>顯示<br>
                                    <input type="checkbox" name="del[]" value="<?=$img["id"];?>">刪除
                                    <input type="hidden" name="id[]" value="<?=$img['id'];?>">
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
                <div class="mt-3 text-center">
                    <input class="btn btn-success" type="submit" value="修改">
                    <input class="btn btn-danger" type="reset" value="重置">
                    <a href="../index.php">
                        <button class="btn btn-primary" type="button">回到前台</button>
                    </a>
                    <a href="./index.php"><button class="btn btn-info" type="button">回到後台</button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script>
    function edit() {
        $.post("../api/edit_intro.php", {
                id: 1,
                name: $("#name").val(),
                age: $("#age").val(),
                hobby: $("#hobby").val(),
                skill: $("#skill").val(),
                intro: $("#intro").val()
            },
            () => {
                location.reload();
            })
    }


    function random() {
        let image = document.getElementById('image');
        let img = ["https://i.picsum.photos/id/119/3264/2176.jpg?hmac=PYRYBOGQhlUm6wS94EkpN8dTIC7-2GniC3pqOt6CpNU",
            "https://i.picsum.photos/id/100/2500/1656.jpg?hmac=gWyN-7ZB32rkAjMhKXQgdHOIBRHyTSgzuOK6U0vXb1w",
            "https://i.picsum.photos/id/1026/4621/3070.jpg?hmac=OJ880cIneqAKIwHbYgkRZxQcuMgFZ4IZKJasZ5c5Wcw",
            "https://i.picsum.photos/id/1028/5184/3456.jpg?hmac=WhttNfn25eTgLTNnhRujSq4IVjx2mMa6wvPG1c6qMVc",
            "https://i.picsum.photos/id/103/2592/1936.jpg?hmac=aC1FT3vX9bCVMIT-KXjHLhP6vImAcsyGCH49vVkAjPQ"
        ];

        function randomnum(x) {
            return Math.floor(Math.random() * x);
        }
        image.src = `${img[randomnum(4)]}`;

    }

    function edit_img() {
        let image = document.getElementById('image');
        let link = image.src;
        $.post("../api/edit_intro_img.php", {
            id: "1",
            img: link
        }, () => {
            location.reload();
        })
    }
</script>