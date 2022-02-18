<h1 class="text-center my-3">編輯contact文字</h1>
<?php
$contact = $Contact_text->find(1);
?>
<div class="py-3" style="background: #eee;">
    <form action="../api/edit_contact_text.php" method="post">
        <table class="mx-auto text-center">
            <tr>
                <td width="30%">Tel:</td>
                <td width="65%">
                    <input type="text" name="tel" value="<?= $contact['tel']; ?>" size="40">
                </td>
            </tr>
            <tr>
                <td width="30%">Email:</td>
                <td width="65%">
                    <input type="text" name="email" value="<?= $contact['email']; ?>" size="40">
                </td>
            </tr>
            <tr>
                <td width="30%">Time:</td>
                <td width="65%">
                    <input type="text" name="time" value="<?= $contact['time']; ?>" size="40">
                </td>
            </tr>
        </table>
        <div class="text-center mt-3">
            <input class="btn btn-success" type="submit" value="修改">
            <input class="btn btn-danger" type="reset" value="重置">
        </div>
    </form>
</div>