<?php get_header(); ?>
	<div id="slideshow">
    	<?php 
		if ( has_post_thumbnail() ) { 
			the_post_thumbnail();
		} 
		?>
    </div>
    <div class="container" id="innercontent">
		<div id="contentleft">
            <h1>Recent Projects</h1>
            <div class="contentdark">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
                <?php comments_template(); ?>
                <?php endwhile; endif; ?>
                <?php get_template_part( 'nav', 'below' ); ?>
            </div>
        </div>
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
    </div>
<? get_footer(); ?>