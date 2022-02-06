
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
<div class="col-md-6 mt-3 mx-auto">
    <form action="../api/upload_portfolio.php" method="post" enctype="multipart/form-data">

        <div class='custom-file mx-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案：</label>
            <input class="custom-file-input" type="file" name="img" id="img">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='link'>連結：</label>
            <input class='form-control' type="text" name="link" id="link">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='title'>標題：</label>
            <input class='form-control' type="text" name="title" id="title">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='class'>分類：</label>
            <input class='form-control' type="text" name="class" id="class">
        </div>
        <div class="mx-auto mb-2 text-center">
            <input type="submit" value="上傳" class="btn btn-primary">
        </div>
    </form>
</div>
<div class="col-md-10 mt-3 mx-auto">
    <div class="text-center">作品集清單</div>
    
    <div style="display:flex;" class="text-center">
        <div style="width: 40%;background:#eee;">作品集圖片</div>
        <div style="width: 40%;background:#eee;">作品集名稱</div>
        <div style="width: 20%;background:#eee;">操作</div>
    </div>

    <form action="" method="post">
        
    </form>

</div>




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