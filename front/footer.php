<!-- footer -->
<?php
    $color=$Footer->find(["sh"=>1]);
    $text=$Footer_text->find(1);
?>
<footer class="text-center footer" style="min-height: 100px; line-height: 100px; background-color: <?=$color['color'];?>;">
        <span><?=$text['text'];?> &nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span><img style="height: 30px; width: auto; display: inline-block;" src="https://static.shoplineimg.co/assets/footer/social_facebook.png"/></span>
        <img style="height: 30px; width: auto; display: inline-block;" src="https://static.shoplineimg.co/assets/footer/social_twitter.png"/>
        <img style="height: 30px; width: auto; display: inline-block;" src="https://static.shoplineimg.co/assets/footer/social_line.png"/>
    </footer>