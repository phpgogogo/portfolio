<?php
    $rows=$Intro->all();
    foreach($rows as $row){

    }
?>

<div id="about"></div>
    <!-- 自我介紹 -->
    <div id="about" class="container" style="margin-top: 200px;">
        <div class="row">
        <div class="row">
        <div class="col-md-6 col-12">
            <h1>About me</h1>
            <div>
                <label>姓名:</label>
                <?=$row["name"];?>
            </div>
            <div>
                <label>年齡:</label>
                <?=$row["age"];?>
            </div>
            <div >
                <label>興趣:</label>
                <?=$row["hobby"];?>
            </div>
            <div >
                <label>技能:</label>
                <?=$row["skill"];?>
            </div>
            <div>
                <label>自我介紹:</label><br>
                <?=$row["intro"];?>
            </div>
        </div>
            <div class="col-md-6 col-12">
                <img src="https://i.picsum.photos/id/119/3264/2176.jpg?hmac=PYRYBOGQhlUm6wS94EkpN8dTIC7-2GniC3pqOt6CpNU" width="100%">
            </div>
        </div>
        
    </div>