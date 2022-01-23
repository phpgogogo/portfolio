<!-- nav bar -->
<nav class="navbar-expand-lg navbar-light bg-light clearfix fixed-top" style="min-height: 50px; line-height: 50px;">
        <div class="float-left">
            <span class="mx-4 font-weight-bold">My portfolio</span>
        </div>
        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="" style="cursor: pointer;">
                    <a class="mx-2 text-info" style="text-decoration: none;" href="#"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="" style="cursor: pointer;">
                    <a class="mx-2 text-info" style="text-decoration: none;" onclick="about()"><i class="fas fa-user"></i> About</a>
                </li>
                <li class="" style="cursor: pointer;">
                    <a class="mx-2 text-info" style="text-decoration: none;" onclick="portfolio()"><i class="fas fa-folder-open"></i> Portfolio</a>
                </li>
                <li class="" style="cursor: pointer;">
                    <a class="mx-2 text-info" style="text-decoration: none;" onclick="contact()"><i class="fas fa-envelope"></i> Contact</a>
                </li>
                <?php
                if(isset($_SESSION["user"]) && $_SESSION["user"]="admin"){
                ?>
                    <li class="" style="cursor: pointer;">
                        <a href="back/index.php" class="mx-2 text-info" style="text-decoration: none;"><i class="fas fa-hand-point-left"></i> 前往後台</a>
                    </li>
                    <li class="" style="cursor: pointer;">
                        <a href="api/logout.php" class="ml-2 mr-5 text-info" style="text-decoration: none;"><i class="fas fa-user-shield"></i> Logout</a>
                    </li>
                <?php
                }else{
                ?>
                    <li class="" style="cursor: pointer;">
                        <a href="login.php" class="ml-2 mr-5 text-info" style="text-decoration: none;"><i class="fas fa-user-shield"></i> Login</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>