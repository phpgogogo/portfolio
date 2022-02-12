<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $rows=$Intro->all();
        // dd($rows);
        foreach($rows as $row){

        }
    ?>
<div class="container" style="margin-top: 200px;">
    <div class="row">
        <div class="col-md-6 col-12">
            <h1>About me</h1>
            <div>
                <label>姓名:</label>
                <input type="text" id="name" name="name" value="<?=$row["name"];?>">
            </div>
            <div>
                <label>年齡:</label>
                <input type="text" id="age" name="age" value="<?=$row["age"];?>">
            </div>
            <div >
                <label>興趣:</label>
                <input type="text" id="hobby" name="hobby" value="<?=$row["hobby"];?>">
            </div>
            <div >
                <label>技能:</label>
                <input type="text" id="skill" name="skill" value="<?=$row["skill"];?>">
            </div>
            <div>
                <label>自我介紹:</label><br>
                <input type="text" id="intro" name="intro" value="<?=$row["intro"];?>" size="50">
            </div>
            <div class="mt-2">
                <button class="btn btn-success" type="button" onclick="edit()">修改</button>
                <a href="../index.php">
                    <button class="btn btn-primary" type="button">回到前台</button>
                </a>
            </div>
        </div>
        
        <div class="col-md-6 col-12">
            <img src="https://i.picsum.photos/id/119/3264/2176.jpg?hmac=PYRYBOGQhlUm6wS94EkpN8dTIC7-2GniC3pqOt6CpNU" width="100%">
        </div>
    </div>
</div>
</body>
</html>

<script>
    function edit(){
        $.post("../api/edit_intro.php",
        {id:1,name:$("#name").val(),age:$("#age").val(),hobby:$("#hobby").val(),skill:$("#skill").val(),intro:$("#intro").val()},
        ()=>{
            location.reload();
        })
    }
</script>


