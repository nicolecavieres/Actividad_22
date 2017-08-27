<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
   
</head>

<body>
<div id="tooplate_wrapper">
    
    <nav id="tooplate_menu">
               <?php wp_nav_menu(
        array(
            'container' => false,
            'items_wrap' => '<ul id=menu-top>%3$s</ul>',
            'theme_location' => 'Menu-header'
        )); ?>      
    </nav> <!-- end of tooplate_menu -->
    
    <div id="tooplate_header">
    
        <div id="site_title"><h1><a href="#">Blue Arc HTML Template</a></h1></div>
        
    </div> <!-- end of header -->


    
<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>
