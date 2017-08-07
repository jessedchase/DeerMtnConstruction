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
            <h1><?php the_title();?></h1>
            <div class="contentdark">
            	<section id="content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
                <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
                <?php endwhile; endif; ?>
                <footer class="footer">
                <?php get_template_part( 'nav', 'below-single' ); ?>
                </footer>
                </section>
            </div>
        </div>
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
    </div>
<? get_footer(); ?>