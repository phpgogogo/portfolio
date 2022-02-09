<!-- content -->
<div class="container" style="margin-top: 300px;">
        <h1 class="text-center" style="margin-bottom: 100px;">LATEST PROTFOLIO</h1>



        <div id="portfolio" class="row">
        <?php
            $rows=$Portfolios->all(["sh"=>1]);
            // dd($rows);
            $total=$Portfolios->math("count","*",["sh"=>1]);
            // echo $total;
            $count=1;
            foreach($rows as $key=>$row){
                if($count%3==0){
                    ?>
                    <div class="col-md-3 col-12 mx-auto portfolio mt-4">
                        <div style= "position:relative; min-height: 130px;">
                            <div class="text-center">
                                <img class="portfolio_img" src="img/<?=$row["img"];?>" alt="Card image" style="object-fit: cover;width:100%;height: 137px;padding-top: 9px;">
                            </div>
                            <div class="bbb" style="display: inline-block; position:absolute;left:0%; top:10px; background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6));width: 100%;height: 93%;"></div>
                            <div class="show_text" style="position:absolute; left:37.5%; top:70%; color:white; font-weight:bold ">
                                <a style="text-decoration: none; color: white;" href="<?=$row["link"];?>">show</a>
                            </div>
                        </div>
                        <div class="card-body mt-5">
                            <h4 class="card-title text-center text-info"><?=$row["title"];?></h4>
                            <p class="card-text text-center"><?=$row["class"];?></p>
                        </div>
                    </div>
                        <div class="w-100"></div>
                    <?php
                }else{
                    ?>
                        <div class="col-md-3 col-12 mx-auto portfolio mt-4">
                            <div style= "position:relative; min-height: 130px;">
                                <div class="text-center">
                                    <img class="portfolio_img" src="img/<?=$row["img"];?>" alt="Card image" style="object-fit: cover;width:100%;height: 137px;padding-top: 9px;">
                                </div>
                        <div class="bbb" style="display: inline-block; position:absolute;left:0%; top:10px; background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6));width: 100%;height: 93%;"></div>
                        <div class="show_text" style="position:absolute; left:37.5%; top:70%; color:white; font-weight:bold ">
                            <a style="text-decoration: none; color: white;" href="<?=$row["link"];?>">show</a>
                        </div>
                            </div>
                            <div class="card-body mt-5">
                                <h4 class="card-title text-center text-info"><?=$row["title"];?></h4>
                                <p class="card-text text-center"><?=$row["class"];?></p>
                            </div>
                        </div>
                    <?php
                }
                ?>

                    
                <?php
                $count++;
            }
            
            
        ?>
        </div>
    </div>