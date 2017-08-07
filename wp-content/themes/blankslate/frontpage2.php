<?php

/**
 * Front Page 2 Template
 *
   Template Name:  Front Page 2
 *
 * @file           frontpage2.php
 * @package        Deer Mountain Construction
 * @author         Jesse Chase 
 * @copyright      2015 Bozeman Interactive
 */

get_header(); ?>
	<div id="slideshow">
    	<?php
    	if ( function_exists( 'soliloquy' ) ) { soliloquy( '27' ); } 
		if ( function_exists( 'soliloquy' ) ) { soliloquy( 'homepage-slideshow', 'slug' ); }
		?>
    </div>
    <div class="container" id="innercontent">
    	<div id="contentleft">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <h1>Deer Mountain Construction</h1>
            <div class="contentdark">
				<?php edit_post_link( $link, $before, $after, $id ); ?>  
				<?php the_content(); ?>
            </div>
            
        <?php endwhile; endif; ?>
        </div>
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
    </div>
    
<? get_footer(); ?>