<?php
    $rows=$Block->all();
    foreach($rows as $row){
        if($row["sh"]==1){
            ?>
            <div class="text-center mt-3 p-2 mx-auto" style="background: #eee;width:700px;">
                <span style="font-size: 32px;"><?=$row["name"];?>狀態:</span>
                <span><a href="../api/block.php?id=<?=$row['id'];?>"><i class='far fa-eye fa-2x'></i></a></span>
            </div>
            <?php
        }else{
            ?>
            <div class="text-center mt-3 p-2 mx-auto" style="background: #eee;width:700px;">
                <span style="font-size: 32px;"><?=$row["name"];?>狀態:</span>
                <span><a href="../api/block.php?id=<?=$row['id'];?>"><i class='far fa-eye-slash fa-2x'></i></a></span>
            </div>
            <?php
        }
        ?>
        <?php
    }
?>

