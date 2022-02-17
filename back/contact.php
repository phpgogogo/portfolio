<h1 class="text-center">CONTACT</h1>

<div>
    <table class="mx-auto text-center table table-hover">
        <tr>
            <th width="20%">name</th>
            <th width="20%">email</th>
            <th>msg</th>
            <th></th>
        </tr>
        <?php
            $rows=$Contact->all();
            foreach($rows as $row){
                ?>
                <tr>
                    <td width="20%"><?=$row["name"];?></td>
                    <td width="20%"><?=$row["email"];?></td>
                    <td><?=$row["msg"];?></td>
                    <td>
                        <button type="button" onclick="del(<?=$row['id'];?>)">刪除</button>
                    </td>
                </tr>
                <?php
            }
        ?>      
    </table>
    <div class="text-center mt-3">
            <a href="../index.php">
                <button class="btn btn-info" type="button">回到前台</button>
            </a>
            <a href="index.php">
                <button class="btn btn-primary" type="button">回到後台</button>
            </a>
        </div>
</div>

<script>
    function del($id){
        $.post("../api/del_contact.php",{id:$id},()=>{
            location.reload();
        })
    }
</script>

