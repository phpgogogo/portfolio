<!-- contact -->
<?php
$contact = $Contact_text->find(1);

$rows=$Block->all();
foreach($rows as $row){
    if($row["name"]=="contact" && $row["sh"]==1){
        ?>

        
<div id="contact" class="div" style="background-color: #f0f0f0; margin-top: 300px; min-height:550px;">
        <h1 class="text-center" style="padding-top: 40px;">CONTACT ME</h1>
        <div class="container">
            <div class="row">
                    <div class="col-md-6 col-12">
                        <form action="api/contact.php" method="post">
                            <input type="text" name="name" id="name" class="form-control mt-2" placeholder="Name" required>
                            <input type="text" name="email" id="email" class="form-control mt-2" placeholder="Email" required>
                            <textarea class="form-control mt-2" name="msg" id="msg" cols="70" rows="10" placeholder="Message"></textarea>
                            <!-- <button class="btn btn-success mt-3" type="button">Send</button> -->
                            <input class="btn btn-success mt-3" type="submit" value="Send">
                        </form>
                    </div>
                <div class="col-md-6 col-12 pt-3" style="padding-left: 50px;">
                    <p><i class="fas fa-phone"></i> Tel: <?=$contact["tel"];?></p>
                    <p><i class="fas fa-envelope-open"></i> Email: <?=$contact["email"];?></p>
                    <p><i class="fas fa-clock"></i> Time: <?=$contact["time"];?></p>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    }else{
    }
}

?>