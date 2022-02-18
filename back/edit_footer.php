<h3 class="text-center mt-3">編輯頁尾顏色</h3>

<?php
    $rows=$Footer->all();
    // dd($rows);
    $now=$Footer->find(["sh"=>1]);
?>
<div class="col-md-6 mx-auto py-3" style="background: #eee;">
    <form action="../api/edit_footer_color.php" method="post">
        <table class="table text-center">
            <tr>
                <td style="width: 50%;">頁尾顏色</td>
                <td>
                    <select name="color" id="">
                    <?php
                        foreach($rows as $row){
                            $selected=($row["sh"]==1)?"selected":"";
                            ?>
                                <option value="<?=$row["color"];?>" <?=$selected;?>><?=$row["intro"];?></option>
                            <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <input type="submit" value="修改">
        </div>
    </form>
    <div class="text-center mt-3">顏色預覽:</div>
    <div class="text-center" style="background: <?=$now["color"];?>;">footer</div>
</div>


<h3 class="text-center mt-3">新增頁尾顏色</h3>
<div class="col-md-6 mx-auto py-3" style="background: #eee;">
    <form action="../api/add_footer_color.php" method="post">
        <div class="text-center p-1">
            新增顏色名稱:
            <input type="text" name="intro">
            ex:紅色 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="text-center p-1">
            新增顏色代碼:
            <input type="text" name="color">
            ex:#00FF00
        </div>
        <div class="text-center">
            <input type="submit" value="送出">
        </div>
    </form>
</div>

<h3 class="text-center mt-3">刪除頁尾顏色</h3>
<div class="col-md-6 mx-auto py-3" style="background: #eee;">
    <form action="../api/del_footer_color.php" method="post">
        <table class="table text-center">
            <tr>
                <td style="width: 50%;">頁尾顏色</td>
                <td>
                    <select name="color" id="">
                    <?php
                        foreach($rows as $row){
                            $selected=($row["sh"]==1)?"selected":"";
                            ?>
                                <option value="<?=$row["color"];?>" <?=$selected;?>><?=$row["intro"];?></option>
                            <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <input type="submit" value="刪除">
        </div>
    </form>
</div>









