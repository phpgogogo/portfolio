<?php
$abouts=$Block->all();
foreach($abouts as $about){
    if($about["name"]=="portfolio" && $about["sh"]==1){
        ?>
<!-- content -->
<div id="portfolio" class="container" style="margin-top: 300px;">
        <h1 class="text-center" style="margin-bottom: 100px;">LATEST PROTFOLIO</h1>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link mytab active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">all</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link mytab2" id="pills-back-tab" data-toggle="pill" href="#pills-back" role="tab" aria-controls="pills-back" aria-selected="false">back</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link mytab3" id="pills-front-tab" data-toggle="pill" href="#pills-front" role="tab" aria-controls="pills-front" aria-selected="false">front</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link mytab4" id="pills-etc-tab" data-toggle="pill" href="#pills-etc" role="tab" aria-controls="pills-etc" aria-selected="false">etc</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            <div id="" class="row">
            <?php
            $rows=$Portfolios->all(["sh"=>1]);
            // dd($rows);
            $total=$Portfolios->math("count","*",["sh"=>1]);
            // echo $total;
            $count=1;
            foreach($rows as $key=>$row){
                if($total==$count){
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
                        
                        <?php
                    }else if($count%3==1){
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <?php
                    }
                }else{
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
                }
                $count++;
            }
            ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-back" role="tabpanel" aria-labelledby="pills-back-tab">
            <div id="portfolio" class="row">
            <?php
            $rows=$Portfolios->all(["sh"=>1,"class"=>"back"]);
            // dd($rows);
            $total=$Portfolios->math("count","*",["sh"=>1,"class"=>"back"]);
            // echo $total;
            $count=1;
            foreach($rows as $key=>$row){
                if($total==$count){
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
                        
                        <?php
                    }else if($count%3==1){
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <?php
                    }
                }else{
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
                }
                $count++;
            }
            ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-front" role="tabpanel" aria-labelledby="pills-front-tab">
            <div id="portfolio" class="row">
            <?php
            $rows=$Portfolios->all(["sh"=>1,"class"=>"front"]);
            // dd($rows);
            $total=$Portfolios->math("count","*",["sh"=>1,"class"=>"front"]);
            // echo $total;
            $count=1;
            foreach($rows as $key=>$row){
                if($total==$count){
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
                        
                        <?php
                    }else if($count%3==1){
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <?php
                    }
                }else{
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
                }
                $count++;
            }
            ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-etc" role="tabpanel" aria-labelledby="pills-etc-tab">
            <div id="portfolio" class="row">
            <?php
            $rows=$Portfolios->all(["sh"=>1,"class"=>"etc"]);
            // dd($rows);
            $total=$Portfolios->math("count","*",["sh"=>1,"class"=>"etc"]);
            // echo $total;
            $count=1;
            foreach($rows as $key=>$row){
                if($total==$count){
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
                        
                        <?php
                    }else if($count%3==1){
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
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
                        <div class="offset-3 col-md-3 col-12 mx-auto"></div>
                        <?php
                    }
                }else{
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
                }
                $count++;
            }
            ?>
            </div>
        </div>
      </div>


        
    </div>
    <?php
    }else{
    }
}

?>