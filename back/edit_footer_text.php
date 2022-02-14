<h1 class="text-center my-3">編輯頁尾文字</h1>
<?php
$footer = $Footer_text->find(1);
?>
<div>
    <form action="../api/edit_footer_text.php" method="post">
        <table class="mx-auto text-center">
            <tr>
                <td width="30%">頁尾文字</td>
                <td width="65%">
                    <input type="text" name="text" value="<?= $footer['text']; ?>" size="40">
                </td>
            </tr>
        </table>
        <div class="text-center mt-3">
            <input class="btn btn-success" type="submit" value="修改">
            <input class="btn btn-danger" type="reset" value="重置">
            <a href="../index.php">
                <button class="btn btn-info" type="button">回到前台</button>
            </a>
            <a href="index.php">
                <button class="btn btn-primary" type="button">回到後台</button>
            </a>
        </div>
    </form>
</div>