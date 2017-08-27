<?php get_header() ?>

    <div id="tooplate_middle">
    	<div id="mid_title">
        	Our Gallery	
      </div>
        <p>In hac habitasse platea dictumst. Donec tincidunt magna a nulla posuere condimentum. Sed laoreet sapien nec orci commodo placera.</p>
    </div> <!-- end of middle -->
    
    



    
	    <?php 
		     $arg = array(
		     	'post_type' => 'projects',
		     	'post_per_page'=>10
		     );
		     $get_arg = new WP_Query( $arg );

		      while ( $get_arg->have_posts() ) {
		      		$get_arg->the_post(); 
	    ?> 
	    <div id="tooplate_main">

		    <div id="gallery">
			    <div class="gallery_box">
			    	<a class="pirobox" href="<?php the_permalink();?>">
			    		<?php the_post_thumbnail('small')?>
			        </a>
			        <h3><?php the_title();?></h3>
			        <p><?php the_excerpt();?></p>
			        <a class="more" href="#">More</a>
			        <div class="cleaner"></div>
			    </div>    
			</div> 

		</div>
    	<?php } wp_reset_postdata(); ?>


<?php get_footer() ?>