<h3 class="text-center mb-4">留言資料</h3>

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
</div>

<script>
    function del($id){
        $.post("../api/del_contact.php",{id:$id},()=>{
            location.reload();
        })
    }
</script>

