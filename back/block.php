<?php
    $rows=$Block->all();
    foreach($rows as $row){
        if($row["sh"]==1){
            ?>
            <div class="text-center mt-3">
                <span><?=$row["name"];?>狀態:</span>
                <span><a href="../api/block.php?id=<?=$row['id'];?>"><i class='far fa-eye'></i></a></span>
            </div>
            <?php
        }else{
            ?>
            <div class="text-center mt-3">
                <span><?=$row["name"];?>狀態:</span>
                <span><a href="../api/block.php?id=<?=$row['id'];?>"><i class='far fa-eye-slash'></i></a></span>
            </div>
            <?php
        }
        ?>
        <?php
    }
?>
<div class="text-center mt-2">
                <a href="../index.php">
                    <button class="btn btn-primary" type="button">回到前台</button>
                </a>
                <a href="./index.php"><button class="btn btn-info" type="button">回到後台</button></a>
        </div>
