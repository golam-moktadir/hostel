<div class="latest_post">
	<h2><span>Notice</span></h2>
    <div class="latest_post_container">
    	<div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        	<ul class="" style="height:auto !important;">
        		<marquee class="" style="color:#fff;padding-top:8px;" behavior='scrol' scrollamount='4'  direction='up'  delay='200' onmouseover='stop()' onmouseout='start()'>
        		<?php
			          foreach ($news_value as $news_data) {
			    ?>
            	<li>
                	<div class="">
                  		<div class=""> 
                  		 <a href="view/front/news/<?php echo $news_data['image'] ?>" target="_blank"><?php echo $news_data['news'] ?></a> 
                  	   </div>
                	</div>
            	</li>  
            	<?php
			       }
			    ?> 
			    </marquee>         
            </ul>
			<div class="single_sidebar">
			        <h2><span>Important Links</span></h2>
			        <?php
			          foreach ($category_value as $category_data) {
			        ?>
			        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong><?php echo $category_data['title']?></strong></a>
			         <ul class="dropdown-menu" role="menu">
			            <?php
			              foreach($link_value as $link_data){
			            ?>
			            <li>
			                <?php
			                    if($link_data['category_id'] == $category_data['id']){
			                ?>
			              <a href="<?php echo $link_data['web_address'] ?>" target="_blank"><?php echo $link_data['title'] ?></a>
			                <?php
			                  }
			                ?>
			            </li>
			            <?php
			              }
			            ?>
			        </ul>
			      </li>
			    <?php } ?>              
			</div>
      </div>
  </div>