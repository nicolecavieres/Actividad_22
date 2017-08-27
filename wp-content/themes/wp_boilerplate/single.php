<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<h3>
		<?php the_title()?>
		</h3>

		<?php the_post_thumbnail() ?>

		<p>
		<?php the_content() ?>
		</p>


		<h6>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		</h6>
		<h6>Escrito por <?php the_author();?></h6> 

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>