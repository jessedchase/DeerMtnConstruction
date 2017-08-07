<?php

/**
 * Inner Page Template
 *
   Template Name:  Inner Page
 *
 * @file           innerpage.php
 * @package        Deer Mountain Construction
 * @author         Jesse Chase 
 * @copyright      2015 Bozeman Interactive
 */

get_header(); ?>
	<div id="slideshow">
    	<?php 
		if ( has_post_thumbnail() ) { 
			the_post_thumbnail();
		} 
		?>
    </div>
    <div class="container" id="innercontent">
		<div id="contentleft">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <h1><?php the_title();?></h1>
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