<section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>News</span>
         <marquee class="news_sticker" style="color:#fff;padding-top:8px;" behavior='scrol' scrollamount='4'  direction=''  delay='200' onmouseover='stop()' onmouseout='start()'> 

          <?php

              foreach ($news_value as $news_data){
              echo "<a style='color:#fff;' href='view/front/uploads/news/$news_data[image]' target='_blank'>$news_data[news]</a> --- ";
              }

          ?>  
           </marquee>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="<?php echo $social_link['facebook'] ?>" target="_blank"></a></li>
              <li class="twitter"><a href="<?php echo $social_link['twitter'] ?>" target="_blank"></a></li>
              <li class="googleplus"><a href="<?php echo $social_link['google_plus'] ?>" target="_blank"></a></li>
              <li class="youtube"><a href="<?php echo $social_link['youtube'] ?>" target="_blank"></a></li>
              <li class="pinterest"><a href="<?php echo $social_link['pinterest'] ?>" target="_blank"></a></li> 
              <li class="vimeo"><a href="<?php echo $social_link['vimeo'] ?>" target="_blank"></a></li>
              <li class="mail"><a href="<?php echo $social_link['mail'] ?>" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>