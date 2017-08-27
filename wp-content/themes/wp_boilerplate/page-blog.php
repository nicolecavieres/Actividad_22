<?php get_header() ?>



 
    <div id="tooplate_middle">
    	<div id="mid_title">
        	Blog Posts
        </div>
        <p>Sed laoreet sapien nec orci commodo placerat. Vestibulum quis dolor nec justo accumsan dapibus. Aenean dictum erat eu nunc venenatis ornare.</p>
    </div> <!-- end of middle -->
    
    <div id="tooplate_main">
    	<div class="col_w960 hr_divider">
            
            	<div class="col_w300 lp_box float_r">
                    <h2>Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac quam nec velit fringilla eleifend. Maecenas elementum ante non lacinia. </p>
                    <ul class="tooplate_list">
                        <li><a href="#">Ut vulputate iaculis feugiat</a></li>
                        <li><a href="#">Nulla nec nisi sem mauris</a></li>
                        <li><a href="#">Pellentesque tincidunt tempus </a></li>
                        <li><a href="#">Maecenas fermentum lacus arcu</a></li>
                        <li><a href="#">Pellentesque id sem odio</a></li>
                        <li><a href="#">Ut neque tortor ornare enim</a></li>
                        <li><a href="#">Aenean sapien risus ode</a></li>
                        <li><a href="#">Nulla pharetra pellentesque</a></li>
                    </ul>    
                    <a class="more" href="#">More</a>
                </div>
        </div>       
    </div>
	    <?php 
		     $arg = array(
		     	'post_type' => 'post',
		     	'post_per_page'=>10
		     );
		     $get_arg = new WP_Query( $arg );

		      while ( $get_arg->have_posts() ) {
		      		$get_arg->the_post(); 
	    ?> 
	    	
                <div class="col_w600 float_l">
                    <div class="post_box">
                        <div class="post_box_date">
                           <?php the_date();?>
                            <span><?php the_author();?></span>
                        </div>
                        <div class="post_box_content">
                            <h2><?php the_title();?></h2>
                           <?the_post_thumbnail()?>
                            <p><?php the_excerpt();?></p>
                        </div>
                        <a class="more float_r" href="#">More</a>
                        <div class="cleaner"></div>
                    </div>
                </div>

			<?php } wp_reset_postdata(); ?>



<?php get_footer() ?>