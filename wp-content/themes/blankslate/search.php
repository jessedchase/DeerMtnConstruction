<?php get_header(); ?>
    <div class="container" id="innercontent">
		<div id="contentleft">
            <h1>Recent Projects</h1>
            <div class="contentdark">
            	<?php if ( have_posts() ) : ?>
				<header class="header">
				<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
				</header>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
				<?php else : ?>
				<article id="post-0" class="post no-results not-found">
				<header class="header">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
				</header>
				<section class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
				<?php get_search_form(); ?>
				</section>
				</article>
				<?php endif; ?>
            </div>
        </div>
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
    </div>
<? get_footer(); ?>