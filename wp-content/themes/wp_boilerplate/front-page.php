<?php get_header() ?>

  
    <div id="tooplate_middle">
    	<div id="mid_title">
        	Welcome to Blue Arc Theme!	
        </div>
        <p>Pellentesque rutrum turpis nec odio fermentum ornare in ut eros. Vestibulum vel ligula a sem luctus ultrices. Vivamus rutrum interdum nisl, et odio molestie sit amet.</p>
    </div> <!-- end of middle -->
    
    <div id="tooplate_main">
    	<div class="col_w960">
              <div class="col_allw300 frontpage_box">
                    <img src="images/tooplate_bc_blue.png" alt="Image" />
                    <h2>Template Design</h2>
                    <p>Blue Arc is free HTML CSS template for any purpose. Credit goes to <a rel="nofollow" href="http://www.vectorvaco.com">Free Vectors</a> for Icons. Mauris sit amet ipsum enim.</p>
                    <a class="more" href="#">Contact us</a>
                </div>
                <div class="col_allw300 frontpage_box">
                    <img src="images/tooplate_bc_green.png" alt="Image" />
                    <h2>Digital Marketing</h2>
                    <p>Ut lorem sapien, sodales ut sollicitudin ut, fermentum euismod dolor. Aenean sed felis non sapien consectetur adipiscing eget.</p>
                    <a class="more" href="#">Contact us</a>
                </div>
                <div class="col_allw300 frontpage_box col_last">
                    <img src="images/tooplate_bc_orange.png" alt="Image" />            
                  <h2>Social Media</h2>
                  <p>Sed nisi quam, egestas ac bibendum eu, dictum id enim. Pellentesque et magna neque accumsan nisi. Vivamus aliquet metus id. </p>
                    <a class="more" href="#">Contact us</a>
                </div>
                <div class="cleaner"></div>
            </div>
            
            <div class="col_w960 col_last">
            
            	<div class="col_w450 lp_box float_l">
                    <h2>New Projects</h2>
                    <ul class="lp_frontpage">
                        <li><a href="#"><img width="200" height="100" src="images/tooplate_image_01.jpg" alt="image" /></a></li>
                        <li><a href="#"><img width="200" height="100" src="images/tooplate_image_02.jpg" alt="image" /></a></li>
                        <li><a href="#"><img width="200" height="100" src="images/tooplate_image_03.jpg" alt="image" /></a></li>
                        <li><a href="#"><img width="200" height="100" src="images/tooplate_image_04.jpg" alt="image" /></a></li>
                    </ul>    
                    <div class="cleaner"></div>
                    <a class="more" href="gallery">More</a>
                </div>

            <div class="col_w450 float_r"> 
                    <h2>Our Updates</h2>
            </div>

             <?php 
             $arg = array(
                'post_type' => 'post',
                'post_per_page'=>2
             );
             $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                    $get_arg->the_post(); 
        ?> 
                
                <div class="col_w450 float_r">   
                    <div class="lbe_box">
                        <div class="lbe_date">
                            <?php the_date();?>
                            <span><?php the_author();?></span>
                        </div>
                        <div class="lbe_content">
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php the_excerpt();?></p>
                        </div>
                        <div class="cleaner"></div>
                    </div>
                  </div> 
                  

        <?php } wp_reset_postdata(); ?>  


                <div class="col_w450 float_r"> 
                   <a class="more" href="blog">More</a>
                </div>
                <div class="cleaner"></div>
            </div>
        
    </div> <!-- end of main -->
    
</div> <!-- end of wrapper -->


<?php get_footer() ?>